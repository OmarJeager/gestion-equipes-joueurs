<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListEquipes;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/equipes',[ListEquipes::class,'ListEquipes'])->name('equipes.index');
Route::get('/equipes/french',[ListEquipes::class,'listEquipesFrancaises'])->name('equipes.french');
Route::get('/equipes/italiennes', [ListEquipes::class, 'insertEquipeItalienne'])->name('equipes.italiennes.insert');
Route::get('/equipes/update-pays-espaniole', [listEquipes::class, 'updateEquipePaysEspagne'])->name('equipes.update.pays.espaniole');
Route::get('/equipes/deleteEquipe', [ListEquipes::class, 'deleteEquipe'])->name('equipes.delete.Equipe');
Route::get('/equipes/with-players', [listEquipes::class, 'listEquipesWithPlayers'])->name('equipes.with.players');
Route::get('/equipes/spanish', [listEquipes::class, 'listEquipesEspagnoles'])->name('equipes.spanish');
Route::get('/joueurs/ages-superieur-ou-egal-30', [listEquipes::class, 'listJoueursAgesSuperieurOuEgal30'])->name('joueurs.ages.superieur.ou.egal.30');
Route::get('/joueurs/eren', [listEquipes::class, 'listJoueursCriteria'])->name('joueurs.criteria');
Route::get('/equipes/with-goals', [listEquipes::class, 'listEquipesWithGoals'])->name('equipes.with.goals');
Route::get('/equipes/with-goals-by-country', [listEquipes::class, 'listEquipesWithGoalsByCountry'])->name('equipes.with.goals.by.country');
Route::get('/equipes/with-goals-by-position', [listEquipes::class, 'listEquipesWithGoalsByPosition'])->name('equipes.with.goals.by.position');
Route::get('/equipes/top-three-buteurs', [listEquipes::class, 'listTopThreeButeursByEquipe'])->name('equipes.top.three.buteurs');
Route::get('/joueurs/top-three-buteurs', [listEquipes::class, 'listTopThreeButeurs'])->name('joueurs.top.three.buteurs');
Route::get('/equipes/by-age', [listEquipes::class, 'listEquipesByAge'])->name('equipes.by.age');






