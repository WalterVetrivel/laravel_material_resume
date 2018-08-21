<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">
        <a class="navbar-brand">
            @if(Request::is('resume'))
                Resume
            @elseif(Request::is('projects'))
                Projects
            @endif
        </a>
        <button class="navbar-toggler" type="button" role="button" data-toggle="collapse" data-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('resume') ? 'active' : '' }}">
                    <a href="{{ route('resume') }}" class="nav-link">Resume</a>
                </li>
                <li class="nav-item {{ Request::is('projects') ? 'active' : '' }}">
                    <a href="{{ route('projects') }}" class="nav-link">Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
