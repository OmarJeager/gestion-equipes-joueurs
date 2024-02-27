<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        @yield('content')
        <a href="{{ route('equipes.index') }}" class="btn btn-primary">Liste des équipes</a><br>
<a href="{{ route('equipes.french') }}" class="btn btn-primary">Liste des équipes</a><br>
<a href="{{ route('equipes.italiennes.insert') }}" class="btn btn-primary">Insérer équipe italienne</a><br>
<a href="{{ route('equipes.update.pays.espaniole') }}" class="btn btn-primary">Modifier le pays de l'équipe en Espagne</a><br>
<a href="{{ route('equipes.delete.Equipe') }}" class="btn btn-danger">Supprimer équipe</a><br>
<a href="{{ route('equipes.with.players') }}" class="btn btn-primary">List Equipe with Players</a><br>
<a href="{{ route('equipes.spanish') }}" class="btn btn-primary">List Equipe Spanish</a><br>
<a href="{{ route('joueurs.ages.superieur.ou.egal.30') }}" class="btn btn-primary">joueurs ages superieur ou egal 30</a><br>
<a href="{{ route('joueurs.criteria') }}" class="btn btn-primary">joueurs ayant marque 15 but  et qui occupe le post milieu qui dorigine Argentine</a><br>
<a href="{{ route('equipes.with.goals') }}" class="btn btn-primary">Equipes with Goals</a><br>
<a href="{{ route('equipes.with.goals.by.country') }}" class="btn btn-primary">Equipes with Goals by Country </a><br>
<a href="{{ route('equipes.with.goals.by.position') }}" class="btn btn-primary">Equipes with goals by position </a><br>
<a href="{{ route('equipes.top.three.buteurs') }}" class="btn btn-primary">Equipes top three buteurs</a><br>
<a href="{{ route('joueurs.top.three.buteurs') }}" class="btn btn-primary">Joueurs top three buteurs</a><br>
<a href="{{ route('equipes.by.age') }}" class="btn btn-primary">Joueurs de Chaque Equipe par age</a><br>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>


