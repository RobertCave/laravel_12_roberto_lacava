<div class="p-5 bg-warning">
    <h1>Blog di Laravel</h1>
</div>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

    <div class="container-fluid">
        <a href="{{ route('homepage') }}" class="navbar-brand">Homepage</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">

                <a href="{{ route('post.index') }}" class="nav-item nav-link">Blog</a>
                <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contattaci</a>
                <a href="{{ route('about-us') }}" class="nav-item nav-link">Informazioni</a>

                

                
            </div>


            <div class="navbar-nav ms-auto">
                
                @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gestione del Blog</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('post.create') }}" class="dropdown-item">Scrivi Post</a>
                    </div>
                </div>
                @endauth


                <div class="nav-item dropdown">

                    @auth
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Utente: {{Auth::user()->name}}</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="form-logout"> @csrf </form> 

                    @else
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Area riservata</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('register') }}" class="dropdown-item">Registrati</a>
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>

                    @endauth

                        
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</nav>
