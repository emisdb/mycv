<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LanguageController;

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
    return view('index');
});

Route::get('/login', function () {
    return view('test');
});
Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/greet', function () {
    return 'Hello World';
});
Route::get('/skills/{type}', [MainController::class,'skills'])->name('skill');
Route::get('/edit/{tab}/{id}', [MainController::class,'edit'])->name('dict-edit');
Route::get('/delete/{tab}/{id}', [MainController::class,'form'])->name('dict-delete');
Route::get('/edit/{tab}', [MainController::class,'edit']);
Route::get('/topic/{id}', [MainController::class,'topic']);
Route::post('/edit/features', [MainController::class,'features']);
Route::resource('main', 'MainController')->only(['index', 'store']);
Route::resource('lang', 'LanguageController');
Route::resource('topic', TopicController::class);

Route::controller(DictController::class)->group(function () {
    Route::get('/dict/{tab}', 'index');
    Route::get('/dict/{tab}/{id}', 'form');
    Route::post('/dict/{tab}/{id}', 'store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
