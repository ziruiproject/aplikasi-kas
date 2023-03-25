<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SpendingController;
use App\Models\Spending;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Tests\Integration\Routing\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Resource Controller untuk Siswa

Route::resource('student', StudentController::class)->middleware('auth');
Route::get('/kas/{student}/add', [StudentController::class, 'add'])->name('student.add')->middleware('auth');
Route::put('/kas/{student}/add', [StudentController::class, 'actionadd'])->name('actionadd')->middleware('auth');
// Route untuk Membuat Tagihan untuk Siswa
Route::get('/invoice/create', [BillController::class, 'create'])->name('invoice.create')->middleware('auth');
Route::post('/invoice/create', [BillController::class, 'store'])->name('invoice.store')->middleware('auth');
// Route untuk menampilkan Seluruh Tagihan
Route::get('/invoice/index', [BillController::class, 'index'])->name('invoice.index')->middleware('auth');
// Route untuk Mengubah Tagihan untuk Siswa
Route::get('/invoice/{id}/edit', [BillController::class, 'edit'])->name('invoice.edit')->middleware('auth');
Route::put('/invoice/{id}/edit', [BillController::class, 'update'])->name('invoice.update')->middleware('auth');
// Route untuk Pembayaran Siswa
Route::get('/payment/{student}/pay', [PaymentController::class, 'pay'])->name('pay')->middleware('auth');
Route::put('/payment/{student}/pay', [PaymentController::class, 'actionpay'])->name('actionpay')->middleware('auth');
// Resource Controller untuk pembayaran (admin)
Route::resource('payment', PaymentController::class)->middleware('auth');
// Route untuk user home
Route::get('/u/{username}', [StudentController::class, 'info'])->name('home')->middleware('auth');
// Route untuk tampilan login
Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route untuk fungsi login
Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route untuk fungsi logout
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('logout')->middleware('auth');
// Route untuk history penggunaan uang
Route::get('/history', [SpendingController::class, 'index'])->name('history')->middleware('auth');
// Route untuk membuat laporan pengeluaran
Route::get('history/create', [SpendingController::class, 'create'])->name('history.create')->middleware('auth');
Route::post('hsitory/create', [SpendingController::class, 'store'])->name('history.store')->middleware('auth');
// Route untuk admin tools
Route::get('admin/tools', [StudentController::class, 'tools'])->name('admin.tools')->middleware('auth');
