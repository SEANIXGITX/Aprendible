<nav>
    {{-- <pre>{{@dump(request())}}</pre>  info del request--}}
    <ul>
        <li class="{{ setActive('home')}}"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
        <li class="{{ setActive('about')}}"><a href="{{ route('about') }}">{{__('About')}}</a></li>
        <li class="{{ setActive('project.*')}}"><a href="{{ route('project.index') }}">{{__('Projects')}}</a></li>
        <li class="{{ setActive('contact')}}"><a href="{{ route('contact') }}">{{__('Contact')}}</a></li>
    </ul>
</nav>