<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
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
    return view('competitions.all');
});

Route::get('/competitions', [CompetitionController::class, 'showAll']) -> name('competitions.all');
Route::get('/competitions/create',[CompetitionController::class, 'create'] ) -> name('competitions.create');
Route::post('competitions/store',[CompetitionController::class, 'store'] ) -> name('competitions.store');
Route::get('/competitions/edit/{id}',[CompetitionController::class, 'edit'] ) -> name('competitions.edit');
Route::delete('/competitions/delete/{id}',[CompetitionController::class, 'destroy'] ) -> name('competitions.destroy');
Route::put('/competitions/update/{id}',[CompetitionController::class, 'update'] ) -> name('competitions.update');