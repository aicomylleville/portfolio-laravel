<header>
    <h1><a href="{{ route('home.index') }}">aico <span>&copy;2023</span></a></h1>

    <a href="#" id="openMenu"><img src="{{ asset('assets/icons/menu.png') }}" alt="menu"></a>
    <a href="#" class="hidden" id="closeMenu" class="hidden"><img src="{{ asset('assets/icons/close.png') }}" alt="menu"></a>
    <nav>
        <div>
            <ul>
                <li><a href="{{ route('home.index') }}" class="selected" data-nav="home">home</a></li>
                <li><a href="{{ route('about') }}" data-nav="about">about me</a></li>
                <li><a href="{{ route('blog.index') }}" data-nav="blog">blog</a></li>
                <li><a href="{{ route('contact') }}" data-nav="contact">contact</a></li>
                @auth
                    @if(auth()->user()->type == "admin")
                        <li><a href="{{ route('admin') }}">Admin</a></li>
                    @endisset
                @endauth
            </ul>
        </div>
        <img src="{{ asset('assets/icons/line.png') }}" alt="line">
        <div>
            <ul>
                <li><a href="https://github.com/aicomylleville" target="blank"><img src="{{ asset('assets/icons/github.png') }}" alt="Github" title="Github"></a></li>
                <li><a href="https://www.linkedin.com/in/aicomylleville/" target="blank"><img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" title="LinkedIn"></a></li>
            </ul>
        </div>
    </nav>
</header>

<section id="mobileMenu" class="hidden">
    <nav>
        <div>
            <ul>
                <li><a href="{{ route('home.index') }}" class="h1">home</a></li>
                <li><a href="{{ route('about') }}"  class="h1">about me</a></li>
                <li><a href="{{ route('blog.index') }}"  class="h1">blog</a></li>
                <li><a href="{{ route('contact') }}"  class="h1">contact</a></li>
                @auth
                    @if(auth()->user()->type == "admin")
                        <li><a href="{{ route('admin') }}" class="h1">Admin</a></li>
                    @endisset
                @endauth
            </ul>
        </div>
        <h2 class="h3">Follow me</h2>
        <div>
            <ul class="icons">
                <li><a href="https://github.com/aicomylleville" target="blank"><img src="{{ asset('assets/icons/github.png') }}" alt="Github" title="Github"></a></li>
                <li><a href="https://www.linkedin.com/in/aicomylleville/" target="blank"><img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" title="LinkedIn"></a></li>
            </ul>
        </div>
    </nav>
</section>
