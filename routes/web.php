<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InvenController;
use App\Http\Controllers\MinyakController;
use App\Http\Controllers\MantapController;
use App\Http\Controllers\PengjemputanController;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\TryController;
use App\Http\Controllers\JemputController;
use App\Imports\MemberImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

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

Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('member', [MemberController::class, 'index'])->name('member');
    Route::post('member', [MemberController::class, 'store']);
    Route::post('member/store', [MemberController::class, 'update'])->name('member.update');
    Route::post('member/destroy', [MemberController::class, 'destroy'])->name('member.destroy');
    Route::get('member/export', [MemberController::class, 'export']);
    Route::post('member/import_excel', [MemberController::class, 'importExcel']); 
    
    
    Route::get('outlet', [OutletController::class, 'index'])->name('outlet');
    Route::post('outlet', [OutletController::class, 'store']);
    Route::post('outlet/store', [OutletController::class, 'update'])->name('outlet.update');
    Route::post('outlet/destroy', [OutletController::class, 'destroy'])->name('outlet.destroy');
    Route::get('outlet/export', [OutletController::class, 'export']);
    
    
    Route::get('paket', [PaketController::class, 'index'])->name('paket');
    Route::post('paket', [PaketController::class, 'store']);
    Route::post('paket/store', [PaketController::class, 'update'])->name('paket.update');
    Route::post('paket/destroy', [PaketController::class, 'destroy'])->name('paket.destroy');
    Route::get('paket/export', [PaketController::class, 'export']);
    
    
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::view('transaction/new', 'pages.transaction.new.index');
    Route::view('transaction/manage', 'pages.transaction.manage.index');
    
    Route::get('buku', [BukuController::class, 'index'])->name('buku');
    Route::post('buku', [BukuController::class, 'store']);
    Route::post('buku/store', [BukuController::class, 'update'])->name('buku.update');
    Route::post('buku/destroy', [BukuController::class, 'destroy'])->name('buku.destroy');
    
    Route::get('inven', [InvenController::class, 'index'])->name('inven');
    Route::post('inven', [InvenController::class, 'store']);
    Route::post('inven/store', [InvenController::class, 'update'])->name('inven.update');
    Route::post('inven/destroy', [InvenController::class, 'destroy'])->name('inven.destroy');
    
    Route::get('minyak', [MinyakController::class, 'index'])->name('minyak');
    Route::post('minyak', [MinyakController::class, 'store']);
    Route::post('minyak/store', [MinyakController::class, 'update'])->name('minyak.update');
    Route::post('minyak/destroy', [MinyakController::class, 'destroy'])->name('minyak.destroy');
    
    Route::get('mantap', [MantapController::class, 'index'])->name('mantap');
    Route::post('mantap', [MantapController::class, 'store']);
    Route::post('mantap/store', [MantapController::class, 'update'])->name('mantap.update');
    Route::post('mantap/destroy', [MantapController::class, 'destroy'])->name('mantap.destroy');
    
    Route::view('/', 'Home.index');
    
    Route::post('logout',[LoginController::class,'logout']);
    Route::get('data_karyawan',[SimulasiController::class, 'index']);
    Route::get('data_karyawan',[TryController::class, 'index']);
});

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class,'authenticate']);
    
});

Route::get('jemput', [JemputController::class, 'index'])->name('jemput');
Route::post('jemput', [JemputController::class, 'store']);
Route::post('jemput/store', [JemputController::class, 'update'])->name('jemput.update');
Route::post('jemput/destroy', [JemputController::class, 'destroy'])->name('jemput.destroy');
Route::get('jemput/export', [JemputController::class, 'export']);




//     Route::group(['prefix'=>'a','middleware'=>['isAdmin','auth']],function(){
//         Route::get('home',[HomeController::class, 'index'])->name('a.home');
//         Route::resource('member',MemberController::class);
//         Route::resource('outlet',OutletController::class);
//         Route::resource('paket',PaketController::class);
//         Route::get('transaksi',[TransaksiController::class, 'index']);
//         Route::get('laporan',[LaportanController::class, 'index']);
//         });

// Route::group(['prefix'=>'k','middleware'=>['isKasir','auth']],function(){
//     Route::get('home',[HomeController::class, 'index'])->name('k.home');
//     Route::resource('member',MemberController::class);
//     Route::resource('paket',PaketController::class);
//     Route::get('transaksi',[TransaksiController::class, 'index']);
//     Route::get('laporan',[LaportanController::class, 'index']);
//      });

// Route::group(['prefix'=>'o','middleware'=>['isOwner','auth']],function(){
//     Route::get('home',[HomeController::class, 'index'])->name('o.home');
//     });


