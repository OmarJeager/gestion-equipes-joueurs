
<h1>Nombre de buts marqués par équipe et par pays</h1>

@foreach($equipes as $equipe)
    <p>{{ $equipe->name }} ({{ $equipe->pays }}) - {{ $equipe->total_goals }} buts</p>
@endforeach
