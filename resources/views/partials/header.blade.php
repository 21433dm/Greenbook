<div class="brand">
    <img src="../img/rgj-header_new.png" alt="RGJ Header">
</div>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home.index') }}">GREENBOOK</a>
    <a class="nav-link ml-auto" href="{{ route('other.about') }}">ABOUT</a>
    @if(!Auth::check())
    <a class="nav-link" href="{{ url('/login') }}">LOGIN</a>
    <a class="nav-link" href="{{ url('/register') }}">REGISTER</a>
    @else
    <a class="nav-link" href="{{ route('home.home') }}">HOME</a>
    <a class="nav-link" href="{{ route('admin.index') }}">POSTS</a>
    <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    @endif
</nav>