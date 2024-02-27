<!-- resources/views/equipes/index.blade.php -->

<h1>Liste des équipes françaises</h1>

<ul>
    @foreach($equipes as $equipe)
        <li>{{ $equipe->name }}</li>
    @endforeach
</ul>
