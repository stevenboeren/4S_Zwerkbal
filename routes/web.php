<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UpcomingTournamentController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', [HomeController::class, 'test'])->name('home');


Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create',[TeamController::class,'create'])->name('teams.create');
Route::get('/teams/{team}/edit',[TeamController::class,'edit'])->name('teams.edit');
Route::post('/teams',[TeamController::class,'store'])->name('teams.store');
Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');

Route::get('/upcoming', [UpcomingTournamentController::class, 'show'])->name('upcoming.index');


