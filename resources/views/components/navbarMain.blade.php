<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/albums">
            <i class="bi bi-music-note-beamed"></i>
            <span class="text-info">MusicFlow</span>
        </a>

        <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#menu"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/albums">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/songs/create">Añadir canciones</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#" 
                        id="navbarDropdown" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                        >Cuenta
                    </a>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                            </a>
                            </form>
                        </li>
                        <li>
                            <a class="dropdown-item" href="">Ajustes</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr class="text-white-50">
            
        </div>

    </div>
</nav>