<?php

namespace App\Http\Controllers;

use App\Models\KasBank;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Bank;
use App\Models\Bill;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index')->with([
            'title' => 'Daftar Siswa',
            'students' => Student::all(),
            'student' => Auth::user(),
            'bills' => Bill::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $student = Student::where('username', $username)->first();
        return view('student.show')->with([
            'student' => $student,
            'kas' => KasBank::first()]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        if ($username !== Auth::user()->username){
            return redirect()->back();
        }
        $student = Student::where('username', $username)->first();
        return view('student.edit')->with([
            'title' => 'Edit ' . strtoupper($student->name),
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {

        $request->validate([
            'username' => 'string|min:3',
            'email' => 'email:rfc,dns',
            'image' => 'image|file|max:5120|dimensions:ratio=1/1'
        ]);

        $student = DB::table('students')->where('username', '=', $username)->limit(1);
        if ($request->hasFile('image')){
            Storage::delete('images/' . Auth::user()->img);
            $request->image->store('images');
            $student->update([
                'img' => $request->image->hashName()
            ]);
        }
        $student->update([
            'username' => $request->username,
            'email' => $request->email
            ]);

        // if ($request->hasFile('image')){
        //     Storage::delete(Auth::user()->img);
        //     $request->image->store('images');
        //     $student->update([
        //         'username' => $request->username,
        //         'email' => $request->email,
        //         'image' => $request->image->hashName()
        //     ]);
        // }else{
        //     $student->update([
        //         'username' => $request->username,
        //         'email' => $request->email,
        //     ]);
        // }

        return redirect()->route('home', $request->username)->with('success', 'Berhasil! Silahkan login ulang');
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

    public function info()
    {
        // return dd(DB::table('payments')->where('student_id', '=', Auth::user()->id)->get());
        return view('student.home')->with([
            'student' => Auth::user(),
            'kas' => KasBank::first(),
            'title' => Auth::user()->name,
            'payments' => DB::table('payments')->where('student_id', '=', Auth::user()->id)->limit(10)->get(),
            'changes' => DB::table('payment_changes')->where('student_id', '=', Auth::user()->id)->limit(10)->get(),
            'banks' => Bank::all()
        ]);
    }

    public function add($id)
    {
        $student = Student::findOrFail($id);
        return view('student.add')->with('student', $student);
    }

    public function actionadd(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|integer|gte:500',
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'kas_bill' => $student->kas_bill + $request->amount
        ]);

        return redirect(route('student.index'))->with('success', 'Tagihan berhasil di tambah');
    }

    public function tools()
    {
        return view('admin.index')->with([
            'title' => 'Admin Tools',
            'student' => Auth::user()
        ]);
    }
}
