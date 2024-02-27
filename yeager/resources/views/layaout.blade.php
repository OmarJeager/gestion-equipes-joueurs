<title>eren yeager @yield('title')</title>
<div>
    @yield('content')
    <ul>
        <li><a href="{{ route('home.welcome') }}">Home</a></li>
        <li><a href="{{ route('home.about') }}">About</a></li>
        <li><a href="{{ route('computers.index') }}">Computers</a></li>
        <li><a href="{{ route('home.contact') }}">Contact</a></li>
    </ul>
</div>
