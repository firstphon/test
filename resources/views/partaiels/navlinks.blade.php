    @if(Request::route()->getName() != 'home')
    <a href="{{ url('/') }}">home</a><br/>
    @endif
    @if(Request::route()->getName() != 'contact')
    <a href="{{ url('/contact') }}">contact</a><br/>
    @endif
    @if(Request::route()->getName() != 'about')
    <a href="{{ url('/about') }}">about</a><br/>
    @endif