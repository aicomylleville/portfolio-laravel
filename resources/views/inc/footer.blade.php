<footer>

    <section>
        <div>
            <p>my socials</p>
            <ul>
                <li><a href="https://github.com/aicomylleville"><img src="{{ asset('assets/icons/github.png') }}" alt="Github" title="Github"></a></li>
                <li><a href="https://www.linkedin.com/in/aicomylleville/"><img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" title="LinkedIn"></a></li>
            </ul>
        </div>

        <div>
            <ul class="nav">
                <li><a href="{{ route('home.index') }}">home</a></li>
                <li><a href="{{ route('about') }}">about me</a></li>
                <li><a href="{{ route('blog.index') }}">blog</a></li>
                <li><a href="{{ route('contact') }}">contact</a></li>
            </ul>
        </div>
    </section>

    <p class="small">&copy; Aico Mylleville 2023</p>

</footer>
