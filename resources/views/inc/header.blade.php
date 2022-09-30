<header>
    @yield('title')
    <nav>
        <button id="menu" class="hidden"><img src="{{ asset('assets/icons/menu.svg') }}" alt="menu" title="menu"></button>
        <ul data-visable="false">
            <li><a href="{{ route('home') }}" data-nav="home">.home()</a></li>
            <li><a href="{{ route('about') }}" data-nav="about">.about()</a></li>
            <li><a href="{{ route('blog.index') }}" data-nav="blog">.blog()</a></li>
            <li><a href="{{ route('contact') }}" data-nav="contact">.contact()</a></li>
            @auth
                @if(auth()->user()->type == "admin")
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <input type="submit" value="Logout">
                        </form>
                    </li>
                @endisset
            @endauth
        </ul>
    </nav>
</header>
