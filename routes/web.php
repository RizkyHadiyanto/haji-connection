<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\tblbpkhController;
use App\Http\Controllers\AkadWakalahController;

use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index'])->name('login');


Route::get('/index', function () {
    return view('index');
});

Route::get('/akad', function () {
    return view('akad',[
        "title"=>"akad"
    ]);
});

Route::get('/bukti', function () {
    return view('bukti',[
        "title"=>"bukti"
    ]);
});
Route::get('/profile', function () {
    return view('profile',[
        "title"=>"profile"
    ]);
});
// Route::get('/cek', function () {
//     return view('cek',[
//         "title"=>"cek"
//     ]);
// });
Route::post('/generate-akad-wakalah', [AkadWakalahController::class, 'generateAkad']);
// Route::get('/login', function () {   
//     return view('sesi/login');

// Route::get('/edit-nasabah', [tblbpkhController::class, 'edit']);
// Route::get('edit-nasabah/{id}', [tblbpkhController::class, 'edit'])->where('id','[0-9]+');

Route::get('/nasabah', [tblbpkhController::class, 'index']);
Route::get('nasabah/view/{id}', [tblbpkhController::class, 'detail','birthdateformat','nomobileformat'])->where('id','[0-9]+');
Route::get('/nasabah/edit/{id}', [tblbpkhController::class, 'edit'])->name('nasabah.edit')->where('id', '[0-9]+');
Route::put('/nasabah/update/{id}', [tblbpkhController::class, 'update'])->name('nasabah.update')->where('id', '[0-9]+');
Route::get('nasabah/hapus/{id}', [tblbpkhController::class, 'destroy']);


Route::get('/login', [SessionController::class, 'index']);
// -> name ('login/login')
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);


// Route::post('/generate-akad-wakalah', [tblbpkhController::class, 'generateAkadWakalah']);


