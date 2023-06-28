<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\PostController;


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

Route::middleware(['auth'])->group( function(){
    Route::get('/', function(){return redirect('/dashboard');}) -> name('home');
    Route::get('/dashboard', function(){return view('/dashboard');}) -> middleware(['auth', 'verified']) -> name('dashboard');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::get('/competitions', [CompetitionController::class, 'showAll']) -> name('competitions.all');
    Route::get('/competitions/create',[CompetitionController::class, 'create'] ) -> name('competitions.create');
    Route::post('competitions/store',[CompetitionController::class, 'store'] ) -> name('competitions.store');
    Route::get('/competitions/edit/{id}',[CompetitionController::class, 'edit'] ) -> name('competitions.edit');
    Route::delete('/competitions/delete/{id}',[CompetitionController::class, 'destroy'] ) -> name('competitions.destroy');
    Route::put('/competitions/update/{id}',[CompetitionController::class, 'update'] ) -> name('competitions.update');

    Route::get('/post', [PostController::class, 'show']) -> name('posts.all');
    Route::get('/posts/new', [PostController::class, 'create']) -> name('posts.new');
    Route::post('/posts/create', [PostController::class, 'savePost']) -> name('posts.post');
});

require __DIR__.'/auth.php';
