<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin','App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/cardresepindex', [App\Http\Controllers\IndexController::class, 'cardresep']);
Route::get('/cardtipindex', [App\Http\Controllers\IndexController::class, 'cardtip']);
Route::get('/cardbahanpilihanindex', [App\Http\Controllers\IndexController::class, 'cardbahanpilihan']);


Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('/saveregister', [App\Http\Controllers\LoginController::class, 'saveregister'])->name('saveregister');

Route::group(['middleware' => ['auth:user']], function(){
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/cardresep', [App\Http\Controllers\HomeController::class, 'cardresep']);
    Route::get('/cardtip', [App\Http\Controllers\HomeController::class, 'cardtip']);
    Route::get('/cardbahanpilihan', [App\Http\Controllers\HomeController::class, 'cardbahanpilihan']);
    Route::get('/resep', [App\Http\Controllers\ResepController::class, 'index'])->name('resep');
    Route::get('/tulis', [App\Http\Controllers\ProfileController::class, 'tulis'])->name('tulis');
    Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index'])->name('profil');
    Route::get('/cooksnap', [App\Http\Controllers\CooksnapController::class, 'index'])->name('cooksnap');
    Route::get('/tips', [App\Http\Controllers\TipsController::class, 'index'])->name('tips');
    Route::get('/aktivitas/user', [App\Http\Controllers\AktivitasUserController::class, 'index'])->name('aktivitassuser');
    Route::get('/aktivitas/user/{aktivitas}', 'App\Http\Controllers\AktivitasUserController@show');
    Route::get('/cardresep/{recipes}', 'App\Http\Controllers\HomeController@showresep');
    Route::get('/cardtip/{tips}', 'App\Http\Controllers\HomeController@showtips');
    Route::get('/cardbahanpilihan/{bahanpilihans}', 'App\Http\Controllers\HomeController@showbahanpilihan');
    Route::get('/home/{infolombas}', 'App\Http\Controllers\HomeController@showinfolomba');
    Route::get('/cooksnap/tulis/{recipes}','App\Http\Controllers\CooksnapController@show');
    Route::get('/resep/tulis','App\Http\Controllers\ResepController@create');
    Route::patch('/resep','App\Http\Controllers\ResepController@store');
    Route::delete('resep/hapus/{id}','App\Http\Controllers\ResepController@destroy');
    Route::get('/resep/edit/{id}','App\Http\Controllers\ResepController@edit');
    Route::patch('/resep/{id}','App\Http\Controllers\ResepController@update');
    Route::get('/profil/edit/{id}','App\Http\Controllers\ProfileController@edit');
    Route::patch('/profil/{id}','App\Http\Controllers\ProfileController@update');
    Route::get('/tips/tulis','App\Http\Controllers\TipsController@create');
    Route::patch('/tips','App\Http\Controllers\TipsController@store');  
    Route::delete('tips/hapus/{id}','App\Http\Controllers\TipsController@destroy');
    Route::get('/tips/edit/{id}','App\Http\Controllers\TipsController@edit');
    Route::patch('/tips/{id}','App\Http\Controllers\TipsController@update');
    Route::patch('/aktivitas/user/{aktivitas}/komentar','App\Http\Controllers\PostCommentController@store')->name('postcomment');  
    Route::patch('cardresep/{recipes}/komentar','App\Http\Controllers\HomeController@storekomentarresep')->name('komentarresep');  
    Route::patch('cardtip/{tips}/komentar','App\Http\Controllers\HomeController@storekomentartips')->name('komentartips');  
    Route::patch('cardresep/{recipes}/cooksnap','App\Http\Controllers\CooksnapController@storecooksnap')->name('komentarcooksnap');  
    Route::get('/homecari', [App\Http\Controllers\HomecariController::class, 'index']);
    
});

Route::group(['middleware' => ['auth:admin']], function(){
    
    Route::get('/admin', function () {
        return view('admin.admin');
    });
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/aktivitas',[App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');
    Route::get('/infolomba',[App\Http\Controllers\InfolombaController::class, 'index'])->name('infolomba');
    Route::get('/bahanpilihan',[App\Http\Controllers\BahanpilihanController::class, 'index'])->name('bahanpilihan');
    Route::get('/komentar',[App\Http\Controllers\KomentarController::class, 'index'])->name('komentar');
    Route::get('/aktivitas/tambah','App\Http\Controllers\AktivitasController@create');
    Route::patch('/aktivitas','App\Http\Controllers\AktivitasController@store');
    Route::get('/infolomba/tambah','App\Http\Controllers\InfolombaController@create');
    Route::patch('/infolomba','App\Http\Controllers\InfolombaController@store');
    Route::delete('infolomba/hapus/{id}','App\Http\Controllers\InfolombaController@destroy');
    Route::get('/bahanpilihan/tambah','App\Http\Controllers\BahanpilihanController@create');
    Route::patch('/bahanpilihan','App\Http\Controllers\BahanpilihanController@store');  
    
});