<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark right">
        <a class="navbar-brand" href="{{route('dashboard')}}">SEECRETSPOT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav">
                <li class="social-menu"><a href="{{route('logout')}}">Logout</a></li>
                <li class="social-menu"><a href="{{route('account')}}">Account</a></li>
            </ul>
        </div>
    </nav>
</header>