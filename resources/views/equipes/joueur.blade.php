
<h1>Liste des joueurs de chaque équipe par âge</h1>

@foreach($equipes as $equipe)
    <p>{{ $equipe->equipe_name }} - {{ $equipe->joueur_name }} ({{ $equipe->age }} ans)</p>
@endforeach
