<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Bill;
use App\Models\Bank;
use App\Models\BillAmount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function index()
    {
        return view('bill.index')->with([
            'title' => 'Daftar Tagihan',
            'bills' => Bill::all()
        ]);
    }
    public function create()
    {
        return view('bill.create')->with([
            'students' => Student::all(),
            'title' => 'Buat Tagihan'
        ]);
    }

    public function store(Request $request)
    {
        return dd($request);
        $request->validate([
            'title' => 'required|string|min:2',
            'amount' => 'required|gte:5000'
        ]);

        $students = explode(',', $_COOKIE['students']);

        Bill::create([
            'title' => $request->title,
        ]);

        $bill = Bill::all()->last()->id;

        BillAmount::create([
            'bill_id' => $bill,
            'amount' => $request->amount
        ]);

        Bank::create([
            'bill_id' => $bill,
        ]);

        foreach ($students as $id){
            Student::find($id)->bills()->attach([$bill => ['amount' => $request->amount]]);
        }
        return redirect(route('student.index'))->with('success', 'Tagihan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $bill = Bill::findOrFail($id);

        return view('bill.edit')->with([
            'students' => Student::all(),
            'bill' => $bill,
            'title' => 'Edit Siswa'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'amount' => 'required|gte:5000'
        ]);

        $students = explode(',', $_COOKIE['students']);
        $bill = Bill::findOrFail($id);

        $bill->update([
            'title' => $request->title
        ]);

        BillAmount::findOrFail($id)->update([
            'amount' => $request->amount
        ]);

        $oldStudent = array();

        foreach (Bill::all()->first()->students as $student){
            array_push($oldStudent, $student->id);
        }

        for ($i=1; $i <= Student::all()->count(); $i++) {
            $student = Student::find($i);
            if (in_array($i, $students)){
                $student->bills()->syncWithoutDetaching([$id => ['amount' => $request->amount]]);
            }else{

                $histories = DB::table('payments')
                                    ->where('title', '=', $bill->title)
                                    ->where('student_id', '=', $i)
                                    ->get(['amount'])
                                    ->toArray();
                $amount = array();
                foreach ($histories as $history){
                    array_push($amount, $history->amount);
                }
                $amount = array_sum($amount);

                if ($amount){
                    $student->update([
                        'wallet' => ($student->wallet) + $amount
                    ]);

                    Bank::findOrFail($id)->update([
                        'amount' => Bank::findOrFail($id)->amount - $amount
                    ]);
                }
                $student->bills()->detach($bill);
            }
        }

        return redirect(route('student.index'))->with('success', 'Tagihan berhasil diubah!');



    }
}
