

<h1>Top trois buteurs</h1>

@foreach($buteurs as $buteur)
    <p>{{ $buteur->name }} - {{ $buteur->goals }} buts</p>
@endforeach
