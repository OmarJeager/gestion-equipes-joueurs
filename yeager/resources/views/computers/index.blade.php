@extends ('layaout')
@section('title','computers')
@section('content')
<h1>Computers</h1>
<div>
    @foreach($computers as $computer)
    <li>
       // <a href="/computers/{{$computer->id}}">
        {{$computer['brand']}} is from {{$computer['origin']}}
        </a>
    </li>
    @endforeach
</div>
@endsection
