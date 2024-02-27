
<h1>Top trois buteurs de chaque équipe</h1>

@foreach($buteurs as $buteur)
    <p>{{ $buteur->equipe_name }} - {{ $buteur->joueur_name }} ({{ $buteur->goals }} buts)</p>
@endforeach
