<!-- resources/views/joueurs/index.blade.php -->

<h1>Liste des joueurs de 30 ans ou plus</h1>

@foreach($joueurs as $joueur)
    <p>{{ $joueur->name }} ({{ $joueur->age }} ans)</p>
    <!-- Display other player information as needed -->
@endforeach
