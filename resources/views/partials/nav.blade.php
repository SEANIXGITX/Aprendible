<nav>
    {{-- <pre>{{@dump(request())}}</pre>  info del request--}}
    <ul>
        <li class="{{ setActive('home')}}"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
        <li class="{{ setActive('about')}}"><a href="{{ route('about') }}">{{__('About')}}</a></li>
        <li class="{{ setActive('project.*')}}"><a href="{{ route('project.index') }}">{{__('Projects')}}</a></li>
        <li class="{{ setActive('contact')}}"><a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
        @auth
            <li>
                <a href="#"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>