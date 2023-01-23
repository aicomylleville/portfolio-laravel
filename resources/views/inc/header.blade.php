<header>
    <h1><a href="{{ route('home') }}">aico <span>&copy;2022</span></a></h1>

    <nav>
        <div>
            <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li><a href="{{ route('about') }}">about me</a></li>
                <li><a href="{{ route('blog.index') }}">blog</a></li>
                <li><a href="{{ route('contact') }}">contact</a></li>
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
