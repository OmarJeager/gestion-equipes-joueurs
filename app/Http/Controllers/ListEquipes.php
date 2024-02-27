<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListEquipes extends Controller
{
    public function listEquipes()
{
    $equipes = DB::select('SELECT * FROM equipes');

    return view('equipes.index', ['equipes' => $equipes]);
}
public function listEquipesFrancaises()
{
    $equipesFrancaises = DB::select('SELECT * FROM equipes WHERE pays = ?', ['french']);

    return view('equipes.french', ['equipes' => $equipesFrancaises]);
}

public function insertEquipeItalienne()
    {
        // Insert the Italian team into the equipes table
        DB::insert('INSERT INTO equipes (name, pays) VALUES (?, ?)', ['Equipe Italienne', 'Italie']);

        // Redirect back to the equipes list
        return redirect()->route('equipes.index');
    }
    public function updateEquipePaysEspagne()
    {
        // Update the country of the team to 'Espagne'
        DB::update('UPDATE equipes SET pays = ? WHERE id = ?', ['Espagne', 1]); // Assuming the team id is 1

        // Redirect back to the equipes list
        return redirect()->route('equipes.index');
    }
    public function deleteEquipe()
    {
        // Delete the Italian team from the equipes table
        DB::delete('DELETE FROM equipes WHERE pays = ?', ['Italie']);

        // Redirect back to the equipes list
        return redirect()->route('equipes.index');
    }
    public function listEquipesWithPlayers()
    {
        // Use the query builder to join the 'equipes' and 'joueurs' tables
        $equipes = DB::table('equipes')
            ->join('joueurs', 'equipes.id', '=', 'joueurs.equipe_id')
            ->select('equipes.*', 'joueurs.name as joueur_name')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.players', ['equipes' => $equipes]);
    }
    public function listEquipesEspagnoles()
    {
        // Use the query builder to fetch Spanish teams
        $equipesEspagnoles = DB::table('equipes')
            ->where('pays', 'Spanish')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.spanish', ['equipes' => $equipesEspagnoles]);
    }
    public function listJoueursAgesSuperieurOuEgal30()
    {
        // Use the query builder to fetch players aged 30 or older
        $joueurs = DB::table('joueurs')
            ->where('age', '>=', 30)
            ->get();

        // Pass the retrieved data to the view
        return view('joueurs.age', ['joueurs' => $joueurs]);
    }
    public function listJoueursCriteria()
    {
        // Use the query builder to fetch players based on criteria
        $joueurs = DB::table('joueurs')
            ->where('goals', '=', 15)
            ->where('position', '=', 'Milieu')
            ->where('origin', '=', 'Argentine')
            ->get();

        // Pass the retrieved data to the view
        return view('joueurs.eren', ['joueurs' => $joueurs]);
    }
    public function listEquipesWithGoals()
    {
        // Use the query builder to fetch total goals for each team
        $equipes = DB::table('equipes')
            ->select('equipes.name', DB::raw('SUM(joueurs.goals) as total_goals'))
            ->join('joueurs', 'equipes.id', '=', 'joueurs.equipe_id')
            ->groupBy('equipes.name')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.goals', ['equipes' => $equipes]);
    }
    public function listEquipesWithGoalsByCountry()
    {
        // Use the query builder to fetch total goals for each team and country
        $equipes = DB::table('equipes')
            ->select('equipes.name', 'equipes.pays', DB::raw('SUM(joueurs.goals) as total_goals'))
            ->join('joueurs', 'equipes.id', '=', 'joueurs.equipe_id')
            ->groupBy('equipes.name', 'equipes.pays')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.country', ['equipes' => $equipes]);
    }
    public function listEquipesWithGoalsByPosition()
    {
        // Use the query builder to fetch total goals for each team and defender player
        $equipes = DB::table('equipes')
            ->select('equipes.name', 'joueurs.position', DB::raw('SUM(joueurs.goals) as total_goals'))
            ->join('joueurs', 'equipes.id', '=', 'joueurs.equipe_id')
            ->where('joueurs.position', '=', 'defenseur')
            ->groupBy('equipes.name', 'joueurs.position')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.défenseur', ['equipes' => $equipes]);
    }
    public function listTopThreeButeursByEquipe()
    {
        // Use the query builder to fetch the top three goal scorers for each team
        $buteurs = DB::table('joueurs')
            ->select('equipes.name as equipe_name', 'joueurs.name as joueur_name', 'joueurs.goals')
            ->join('equipes', 'joueurs.equipe_id', '=', 'equipes.id')
            ->whereRaw('joueurs.id IN (SELECT id FROM (SELECT id, ROW_NUMBER() OVER (PARTITION BY equipe_id ORDER BY goals DESC) as rn FROM joueurs) as tmp WHERE rn <= 3)')
            ->orderBy('equipe_name')
            ->orderByDesc('goals')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.goat', ['buteurs' => $buteurs]);
    }
    public function listTopThreeButeurs()
    {
        // Use the query builder to fetch the top three goal scorers
        $buteurs = DB::table('joueurs')
            ->select('name', 'goals')
            ->orderByDesc('goals')
            ->limit(3)
            ->get();

        // Pass the retrieved data to the view
        return view('joueurs.goat', ['buteurs' => $buteurs]);
    }
    public function listEquipesByAge()
    {
        // Use the query builder to fetch players grouped by age for each team
        $equipes = DB::table('equipes')
            ->select('equipes.name as equipe_name', 'joueurs.name as joueur_name', 'joueurs.age')
            ->join('joueurs', 'equipes.id', '=', 'joueurs.equipe_id')
            ->orderBy('equipe_name')
            ->orderBy('joueurs.age')
            ->get();

        // Pass the retrieved data to the view
        return view('equipes.joueur', ['equipes' => $equipes]);
    }
}
