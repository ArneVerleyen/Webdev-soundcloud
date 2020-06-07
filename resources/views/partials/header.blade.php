
<header>
    <nav class="navigation">
        <a class="logo" href="{{route('home', app()->getLocale())}}">
            <img src=" {{asset('images/SoundCloud-logo.png')}} ">
        </a>

        <ul class="nav-list">
            <li><a href="{{ route('home', app()->getLocale()) }}">Home</a></li>
            <li><a href=" {{route('about', app()->getLocale())}} "> {{__('about')}} </a></li>
            <li><a href="{{route('donate', app()->getLocale())}}">{{__('donate')}}</a></li>
            <li><a href="{{route('albums', app()->getLocale())}}"> {{__('blogs')}} </a></li>
            <li><a href="">{{__('newsletter')}}</a></li>
            <li><a href=" {{route('contact', app()->getLocale())}} ">{{__('contact')}}</a></li>
            <li>
                 <a href="{{route(Route::currentRouteName(),'nl')}}">NL</a>
            </li>
            <li>
                <a href="{{route(Route::currentRouteName(),'en')}}">ENG</a>
           </li>
        </ul>
    </nav>
</header>





