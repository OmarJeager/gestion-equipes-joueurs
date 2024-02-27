
<h1>Liste des joueurs ayant marqué 15 buts, occupant le poste de milieu et ayant l'origine argentine</h1>

@foreach($joueurs as $joueur)
    <p>{{ $joueur->name }} - {{ $joueur->goals }} buts, {{ $joueur->position }}, origine: {{ $joueur->origin }}</p>

@endforeach
