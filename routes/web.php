<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Charts\BenchChart;
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
Route::get('lang/{lang}', function($lang) {
    session()->put('lang', $lang);
    return back();
})->name('lang');
Route::middleware(['auth'])->group( function(){
    Route::get('/', function(){return redirect('/dashboard');}) -> name('home');
    Route::get('/dashboard', function () { $posts = post::all(); return view('dashboard', compact('posts')); })->middleware(['auth', 'verified'])->name('dashboard');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
    Route::get('/profile/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [ProfileController::class, 'userList'])->name('user.list');
    Route::get('/profile/{user}', [ProfileController::class, 'showID'])->name('profile.showID');
    Route::match(['get', 'post'], '/users/filter', [ProfileController::class, 'filterUsers'])->name('user.filter');
    Route::post('/admin/make/{id}', [ProfileController::class, 'makeAdmin'])->name('admin.make');
    Route::post('/admin/remove/{id}', [ProfileController::class, 'removeAdmin'])->name('admin.remove');




    Route::get('/competitions', [CompetitionController::class, 'showAll']) -> name('competitions.all');
    Route::get('/competitions/create',[CompetitionController::class, 'create'] ) -> name('competitions.create');
    Route::post('competitions/store',[CompetitionController::class, 'store'] ) -> name('competitions.store');
    Route::get('/competitions/edit/{id}',[CompetitionController::class, 'edit'] ) -> name('competitions.edit');
    Route::delete('/competitions/delete/{id}',[CompetitionController::class, 'destroy'] ) -> name('competitions.destroy');
    Route::put('/competitions/update/{id}',[CompetitionController::class, 'update'] ) -> name('competitions.update');
    Route::get('/competitions/{competition}', [CompetitionController::class, 'show'])->name('competitions.show');
    Route::post('/competes', [CompetitionController::class, 'storecompt'])->name('competes.store');



    Route::get('/post', [PostController::class, 'show']) -> name('posts.all');
    Route::get('/posts/new', [PostController::class, 'create']) -> name('posts.new');
    Route::post('/posts/create', [PostController::class, 'savePost']) -> name('posts.post');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

});

require __DIR__.'/auth.php';
