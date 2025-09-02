<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front');
});

Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware'->["auth"]], function(){
    Route::resource('admin/anggota', AnggotaController::class,);
    Route::get('admin/anggota/hapus/{id}', [AnggotaController::class, "destroy"] );
    
    Route::resource('admin/buku', BukuController::class  );
    Route::get('admin/buku/hapus/{id}', [BukuController::class, 'destroy']  );

    Route::resource('admin/peminjaman', PeminjamanController::class  );

//});


