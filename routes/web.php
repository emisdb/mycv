<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\api\ProjectController as ApiProjectController;
use App\Http\Controllers\api\V2\ProjectController as ApiV2ProjectController;
use App\Http\Controllers\api\TopicController as ApiTopicController;
use App\Http\Controllers\api\IdeaController as ApiIdeaController;
//use App\Http\Livewire\Counter;
use App\Http\Controllers\DictController;
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

Route::middleware('logRequest')->group(function () {
    Route::get('/', [MainController::class,'home'])->name('index');
    Route::get('/skills', [MainController::class,'skills'])->name('skills');
    Route::get('/edu', [MainController::class,'edu'])->name('edu');
    Route::get('/projects/{type}', [MainController::class,'projects'])->name('projects');
    Route::get('/project/{id}', [MainController::class,'project'])->name('projects');
    Route::redirect('/projectsp', '/projects/1')->name('projectsp');
    Route::redirect('/projectst', '/projects/0')->name('projectst');
    Route::get('/skill', function () { return view('skills-accordion');});
    Route::get('/contact', function () {
        return view('contact');
    });

});

Route::middleware('logFileDownload')->group(function () {
    Route::get('/download/cv_eng_g.pdf', function () {
        return response()->file(public_path('docs/cv_eng_g.pdf'));
    });
    Route::get('/download/cv_eng_short.pdf', function () {
        return response()->file(public_path('docs/cv_eng_short.pdf'));
    });
    Route::get('/download/cv_long_ru.pdf', function () {
        return response()->file(public_path('docs/cv_long_ru.pdf'));
    });
    Route::get('/download/cv_ru.pdf', function () {
        return response()->file(public_path('docs/cv_ru.pdf'));
    });

});


Route::get('/test', function () {
    return view('adminlte');
});
Route::get('/login', function () {
    return view('test');
});
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/greet', function () {
    return view('greet');
});
Route::get('/home', function () {
    return view('index');
});
// Route::get('/counter', Counter::class);

Route::get('/skills/{type}', [MainController::class,'skills'])->name('skill');
Route::get('/edit/{tab}/{id}', [MainController::class,'edit'])->name('dict.edit');
Route::get('/delete/{tab}/{id}', [MainController::class,'form'])->name('dict.delete');
Route::get('/edit/{tab}', [MainController::class,'edit']);
Route::get('/topic/{id}', [MainController::class,'topic']);
Route::post('/edit/features', [MainController::class,'features']);
Route::resource('main', MainController::class)->only(['index', 'store']);
Route::resource('lang', LanguageController::class);
//Route::resource('topic', TopicController::class);

Route::controller(DictController::class)->middleware(['auth'])->group(function () {
    Route::get('/dict/{tab}', 'index')->name('dict.uix');
    Route::get('/dict/test/{tab}', 'test');
    Route::get('/dict/{tab}/{id}', 'subindex')->name('dict.six');
    Route::get('/dict/edit/{tab}/{id}', 'form')->name('dict.edit');
    Route::get('/dict/create/{tab}/{id}', 'subform')->name('dict.create');
    Route::get('/dict/delete/{tab}/{id}', 'destroy')->name('dict.delete');
    Route::post('/dict/store/{tab}/{id}', 'store')->name('dict.store');
    Route::post('/dict/substore/{tab}/{id}/{parent}', 'substore')->name('dict.substore');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/topics', [TopicController::class,'topics'])->name('topics');
Route::get('/ideas', [TopicController::class,'topic_ideas'])->name('topic_ideas');
Route::get('/projs', [ProjectController::class,'index'])->middleware(['auth'])->name('projs');
Route::get('/logs/{id}', [FileController::class,'showLog'])->middleware(['auth'])->name('logs');
Route::redirect('/logq', '/logs/0')->name('logq');
Route::redirect('/logd', '/logs/1')->name('logd');

Route::group(['prefix' => '/api', 'as' => 'api.'],  static function (Router $router) {

   Route::get('/projs/{type?}', [ApiProjectController::class,'index'])->name('api-projs');
    Route::get('/proj/{id}', [ApiProjectController::class,'proj'])->name('api-proj');
    Route::get('/indi', [ApiProjectController::class,'indi'])->name('api-projs-indi');
    Route::get('/team', [ApiProjectController::class,'team'])->name('api-projs-team');
    Route::get('/topics', [ApiTopicController::class,'topics'])->name('topics');
    Route::get('/topic/{topic}', [ApiTopicController::class,'show'])->name('topic');
    Route::get('/idea/{idea}', [ApiIdeaController::class,'show'])->name('idea');
    Route::get('/tech/{topic}', [ApiTopicController::class,'tech'])->name('idea');
    Route::get('/proj/{id}/edit', [ApiProjectController::class,'projEdit'])->name('api-proj');

});
Route::group(['prefix' => '/api/v2', 'as' => 'api.v2'],  static function (Router $router) {
    Route::get('/projs/{type?}', [ApiV2ProjectController::class,'index'])->name('api2-projs');
});

require __DIR__.'/auth.php';
