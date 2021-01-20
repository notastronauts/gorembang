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

Route::get('/', function () {
    return view('auth.register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', 'App\Http\Livewire\User\Index')->name('user-management.users');
    });

    // Pendopo
    Route::prefix('pendopo')->group(function () {
        Route::get('/', 'App\Http\Livewire\Pendopo\Index')->name('models.pendopo');
        Route::get('/show/{id}', 'App\Http\Livewire\Pendopo\Show')->name('models.pendopo.show');
    });

    // Kantor Bupati
    Route::prefix('kantor-bupati')->group(function () {
        Route::get('/', 'App\Http\Livewire\KantorBupati\Index')->name('models.kantor-bupati');
        Route::get('/show/{id}', 'App\Http\Livewire\KantorBupati\Show')->name('models.kantor-bupati.show');
    });

    // Alun-alun
    Route::prefix('alun-alun')->group(function () {
        Route::get('/', 'App\Http\Livewire\AlunAlun\Index')->name('models.alun-alun');
        Route::get('/show/{id}', 'App\Http\Livewire\AlunAlun\Show')->name('models.alun-alun.show');
    });

    // Hotel
    Route::prefix('hotel')->group(function () {
        Route::get('/', 'App\Http\Livewire\Hotel\Index')->name('models.hotel');
        Route::get('/show/{id}', 'App\Http\Livewire\Hotel\Show')->name('models.hotel.show');
    });

    // Kuliner
    Route::prefix('kuliner')->group(function () {
        Route::get('/', 'App\Http\Livewire\Kuliner\Index')->name('models.kuliner');
        Route::get('/show/{id}', 'App\Http\Livewire\Kuliner\Show')->name('models.kuliner.show');
    });

    // Kuliner
    Route::prefix('ibadah')->group(function () {
        Route::get('/', 'App\Http\Livewire\Ibadah\Index')->name('models.ibadah');
        Route::get('/show/{id}', 'App\Http\Livewire\Ibadah\Show')->name('models.ibadah.show');
    });

    // Travel
    Route::prefix('travel')->group(function () {
        Route::get('/', 'App\Http\Livewire\Travel\Index')->name('models.travel');
        Route::get('/show/{id}', 'App\Http\Livewire\Travel\Show')->name('models.travel.show');
    });

    // Pantai
    Route::prefix('pantai')->group(function () {
        Route::get('/', 'App\Http\Livewire\Pantai\Index')->name('models.pantai');
        Route::get('/show/{id}', 'App\Http\Livewire\Pantai\Show')->name('models.pantai.show');
    });

    // Oleh oleh
    Route::prefix('oleh-oleh')->group(function () {
        Route::get('/', 'App\Http\Livewire\OlehOleh\Index')->name('models.oleh-oleh');
        Route::get('/show/{id}', 'App\Http\Livewire\OlehOleh\Show')->name('models.oleh-oleh.show');
    });

    // Klenteng
    Route::prefix('klenteng')->group(function () {
        Route::get('/', 'App\Http\Livewire\Klenteng\Index')->name('models.klenteng');
        Route::get('/show/{id}', 'App\Http\Livewire\Klenteng\Show')->name('models.klenteng.show');
    });

    // Batik
    Route::prefix('batik')->group(function () {
        Route::get('/', 'App\Http\Livewire\Batik\Index')->name('models.batik');
        Route::get('/show/{id}', 'App\Http\Livewire\Batik\Show')->name('models.batik.show');
    });

    // Pesantren
    Route::prefix('pesantren')->group(function () {
        Route::get('/', 'App\Http\Livewire\Pesantren\Index')->name('models.pesantren');
        Route::get('/show/{id}', 'App\Http\Livewire\Pesantren\Show')->name('models.pesantren.show');
    });
});
