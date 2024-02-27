

<h1>Liste des équipes avec leurs joueurs</h1>

@foreach($equipes as $equipe)
    <h2>{{ $equipe->name }}</h2>
    <ul>
        <li>{{ $equipe->joueur_name }}</li>

    </ul>
@endforeach
