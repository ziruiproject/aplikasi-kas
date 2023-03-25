<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;
use App\Models\KasBank;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.index')->with([
            'payments' => Payment::orderBy('created_at', 'desc')->get(),
            'student' => Auth::user(),
            'title' => 'Daftar Pembayaran'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  Membuat Tagihan Baru
    public function create()
    {

        return view('payment.create')->with('student', Student::find(1));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|integer|lte:35|different:id',
            'amount' => 'required|integer|gte:500'
        ]);

        Payment::create([
            'student_id' => $request->student_id,
            'amount' => $request->amount,
            'admin_name' => Auth::user()->name
        ]);

        return redirect()->route('payment.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Menampilkan Halaman Pembayaran
    public function pay($id)
    {
        $student = Student::findOrFail($id);
        return view('payment.pay')->with([
            'student' => $student,
            'title' => 'Bayar'
        ]);
    }

    // Menambahkan Record Pembayaran
    public function actionpay(Request $request, $id)
    {
        // return dd($request);
        // Validasi
        $request->validate([
            'payment' => 'required|numeric',
            'amount' => 'required|integer|gte:500'
        ]);

        // Get Student
        $student = Student::findOrFail($id);

        // Payment

        // Jika bayar kas
        if ($request->payment == 0){

            // Tambah Saldo Siswa
            $student->update([
                'wallet' => $student->wallet + $request->amount
            ]);

            // Jika Saldo Lebih Besar
            if ($student->wallet >= $student->kas_bill){
                $student->update([
                    'wallet' => ($student->wallet) - ($student->kas_bill),
                    'kas_bill' => 0
                ]);

            // Jika Saldo Lebih Kecil
            }else{
                $student->update([
                    'wallet' => 0,
                    'kas_bill' => ($student->kas_bill) - ($student->wallet)
                ]);
            }

            // Buat Record
            Payment::create([
                'student_id' => $student->id,
                'admin_name' => Auth::user()->name,
                'title' => 'Kas',
                'amount' => $request->amount
            ]);

            // Menambah Uang ke Table Bank
            KasBank::first()->update([
                'amount' => KasBank::first()->amount + $request->amount
            ]);

        // Jika bukan kas
        }else{
            $bill = $student->bills->find($request->payment)->pivot;

            // Jika lebih besar
            if ($request->amount > $bill->amount){
                $student->update([
                    'wallet' => $student->wallet + ($request->amount - $bill->amount)
                ]);
                // Update tagihan
                $bill->update([
                'amount' => 0
                ]);
            }else{
                // Update tagihan
                $bill->update([
                    'amount' => ($bill->amount) - ($request->amount)
                ]);
            }

            // Buat Payment Record
            Payment::create([
                'student_id' => $student->id,
                'admin_name' => Auth::user()->name,
                'title' => $student->bills->find($request->payment)->title,
                'amount' => $request->amount
            ]);

            // Menambah Uang ke Table Bank
            Bank::find($student->bills->find($request->payment)->id)->update([
                'amount' => Bank::find($student->bills->find($request->payment)->id)->amount + $request->amount
            ]);

            // Jika lunas maka dihilangkan dari table
            if ($bill->amount == 0){
                $student->bills()->detach($id);
            }

        }

        return redirect(route('student.index'))->with('success', 'Pembayaran Berhasil');
    }


}
