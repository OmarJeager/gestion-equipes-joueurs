
<h1>Nombre de buts marqués par équipe et par les joueurs ayant comme position défenseur</h1>

@foreach($equipes as $equipe)
    <p>{{ $equipe->name }} - {{ $equipe->total_goals }} buts</p>
@endforeach
