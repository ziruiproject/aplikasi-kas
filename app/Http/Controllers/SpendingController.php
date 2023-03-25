<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Spending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bill;
use App\Models\KasBank;

class SpendingController extends Controller
{

    public function index()
    {
        return view('spending.index')->with([
            'spendings' => Spending::orderBy('created_at', 'desc')->with('student')->get(),
            'title' => 'Pengeluaran',
            'student' => Auth::user()
        ]);
    }

    public function create()
    {
        return view('spending.create')->with([
            'title' => 'Buat Laporan Pengeluaran',
            'bills' => Bill::all(),
            'student' => Auth::user()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'spending' => 'required|numeric',
            'amount' => 'required|numeric|gte:500',
            'desc' => 'required|string|min:5'
        ]);

        Spending::create([
           'student_id' => Auth::user()->id,
           'amount' => $request->amount,
           'desc' => $request->desc
        ]);

        // Update Bank
        if ($request->spending == 0){
            KasBank::first()->update([
                'amount' => (KasBank::first()->amount - $request->amount)
            ]);
        }else{
            Bank::findOrFail($request->spending)->update([
                'amount' => (Bank::findOrFail($request->spending)->amount - $request->amount)
            ]);
        }

        return redirect(route('history'))->with('success', 'Data berhasil ditambah!');
    }
}
