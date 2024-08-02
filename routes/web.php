<?php

use App\Http\Controllers\authController;
use App\Models\anggotaKepengurusan;
use App\Models\kegiatan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'anggotaKepengurusan' => anggotaKepengurusan::all(),
        'kegiatan' => kegiatan::all(),
    ]);
})->name('home');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/login/action', [
    authController::class,
    'loginAction'
])->name('login.action');


Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/admin/user', function (){
    return view('admin.user');
})->name('admin.user');


Route::get('/admin/kegiatan', function (){
    return view('admin.kegiatan');
})->name('admin.kegiatan');


Route::get('/admin/kepengurusan', function (){
    return view('admin.kepengurusan');
})->name('admin.kepengurusan');


Route::get('/admin/penduduk', function (){
    return view('admin.penduduk');
})->name('admin.penduduk');


Route::get('/admin/kknunmul', function (){
    return view('admin.kknunmul');
})->name('admin.kknunmul');


Route::get('/kegiatan', function (){
    return view('components.kegiatan', [
        'kegiatan' => kegiatan::all(),
    ]);
})->name('components.kegiatan');


Route::get('/kkn', function (){
    return view('components.infokkn');
})->name('components.infokkn');


Route::get('/profile', function (){
    return view('components.profile');
})->name('components.profile');


Route::get('/kepengurusan', function (){
    return view('components.kepengurusan', [
        'anggotaKepengurusan' => anggotaKepengurusan::all(),
    ]);
})->name('components.kepengurusan');
