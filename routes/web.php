<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\kepengurusanController;
use App\Http\Controllers\kknunmulController;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\userController;
use App\Models\anggotaKepengurusan;
use App\Models\kegiatan;
use App\Models\kknunmul;
use App\Models\penduduk;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'anggotaKepengurusan' => anggotaKepengurusan::all(),
        'kegiatan' => kegiatan::all(),
        'penduduk' => penduduk::all(),
        'kknunmul' => kknunmul::all(),
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
    return view('admin.dashboard', [
        'userCount' => User::count(),
        'kegiatanCount' => kegiatan::count(),
        'kepengurusanCount' => anggotaKepengurusan::count(),
    ]
);
})->name('admin.dashboard');


Route::get('/admin/user', function (){
    return view('admin.user', [
        'user' => User::all(),
        'userCount' => User::count(),
    ]);
})->name('admin.user');


Route::get('/admin/kegiatan', function (){
    return view('admin.kegiatan', [
        'kegiatan' => kegiatan::all(),
        'kegiatanCount' => kegiatan::count(),
    ]);
})->name('admin.kegiatan');


Route::get('/admin/kepengurusan', function (){
    return view('admin.kepengurusan', [
        'anggotaKepengurusan' => anggotaKepengurusan::all(),
        'kepengurusanCount' => anggotaKepengurusan::count(),
    ]);
})->name('admin.kepengurusan');


Route::get('/admin/penduduk', function (){
    return view('admin.penduduk');
})->name('admin.penduduk');


Route::get('/admin/kknunmul', function (){
    return view('admin.kknunmul', [
        'kknunmul' => kknunmul::all(),
        'kknunmulCount' => kknunmul::count(),
    ]);
})->name('admin.kknunmul');


Route::controller(kepengurusanController::class)->group(function(){
    Route::get('/admin/dashboard/kepengurusan/addKepengurusan', 'addkepengurusan')->name('admin.dashboard.addKepengurusan');
    Route::post('/admin/dashboard/kepengurusan/addKepengurusan/action', 'storeKepengurusan')->name('admin.storeKepengurusan');
    Route::get('/admin/dashboard/kepengurusan/editKepengurusan/{id}', 'editKepengurusan')->name('admin.dashboard.editKepengurusan');
    Route::post('/admin/dashboard/kepengurusan/editKepengurusan/{id}/action', 'updateKepengurusan')->name('admin.dashboard.updateKepengurusan');
    Route::get('/admin/dashboard/kepengurusan/deleteKepengurusan/{id}/action', 'deleteKepengurusan')->name('admin.dashboard.deleteKepengurusan');
});


Route::controller(kegiatanController::class)->group(function(){
    Route::get('/admin/dashboard/Kegiatan/addKegiatan', 'addKegiatan')->name('admin.dashboard.addKegiatan');
    Route::post('/admin/dashboard/Kegiatan/addKegiatan/action', 'storeKegiatan')->name('admin.storeKegiatan');
    Route::get('/admin/dashboard/Kegiatan/editKegiatan/{id}', 'editKegiatan')->name('admin.dashboard.editKegiatan');
    Route::post('/admin/dashboard/Kegiatan/editKegiatan/{id}/action', 'updateKegiatan')->name('admin.dashboard.updateKegiatan');
    Route::get('/admin/dashboard/Kegiatan/deleteKegiatan/{id}/action', 'deleteKegiatan')->name('admin.dashboard.deleteKegiatan');
});


Route::controller(kknunmulController::class)->group(function(){
    Route::get('/admin/dashboard/kknunmul/addkknunmul', 'addkknunmul')->name('admin.dashboard.addkknunmul');
    Route::post('/admin/dashboard/kknunmul/addkknunmul/action', 'storekknunmul')->name('admin.storekknunmul');
    Route::get('/admin/dashboard/kknunmul/editkknunmul/{id}', 'editkknunmul')->name('admin.dashboard.editkknunmul');
    Route::post('/admin/dashboard/kknunmul/editkknunmul/{id}/action', 'updatekknunmul')->name('admin.dashboard.updatekknunmul');
    Route::get('/admin/dashboard/kknunmul/deletekknunmul/{id}/action', 'deletekknunmul')->name('admin.dashboard.deletekknunmul');
});


Route::controller(userController::class)->group(function(){
    Route::get('/admin/dashboard/User/addUser', 'addUser')->name('admin.dashboard.addUser');
    Route::post('/admin/dashboard/User/addUser/action', 'storeUser')->name('admin.storeUser');
    Route::get('/admin/dashboard/User/deleteUser/{id}/action', 'deleteUser')->name('admin.dashboard.deleteUser');
});


Route::controller(pendudukController::class)->group(function(){
    Route::post('/admin/dashboard/Penduduk/addPenduduk/action', 'storePenduduk')->name('admin.storePenduduk');
    Route::get('/admin/dashboard/Penduduk/editPenduduk', 'editPenduduk')->name('admin.dashboard.editPenduduk');
    Route::post('/admin/dashboard/Penduduk/editPenduduk/{id}/action', 'updatePenduduk')->name('admin.dashboard.updatePenduduk');
});


Route::get('/kegiatan', function (){
    return view('components.kegiatan', [
        'kegiatan' => kegiatan::all(),
    ]);
})->name('components.kegiatan');


Route::get('/kkn', function (){
    return view('components.infokkn', [
        'kknunmul' => kknunmul::all(),
    ]);
})->name('components.infokkn');


Route::get('/profile', function (){
    return view('components.profile');
})->name('components.profile');


Route::get('/kepengurusan', function (){
    return view('components.kepengurusan', [
        'anggotaKepengurusan' => anggotaKepengurusan::all(),
    ]);
})->name('components.kepengurusan');


Route::get('/penduduk', function (){
    return view('components.penduduk', [
        // 'penduduk' => penduduk::all(),
    ]);
})->name('components.penduduk');


Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');
