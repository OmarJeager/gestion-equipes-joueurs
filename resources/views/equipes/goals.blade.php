

<h1>Nombre de buts marqués par chaque équipe</h1>

@foreach($equipes as $equipe)
    <p>{{ $equipe->name }} - {{ $equipe->total_goals }} buts</p>
@endforeach
