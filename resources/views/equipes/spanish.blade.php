<!-- resources/views/equipes/index.blade.php -->

<h1>Liste des équipes espagnoles</h1>

@foreach($equipes as $equipe)
    <p>{{ $equipe->name }}</p>
    <!-- Display other team information as needed -->
@endforeach
