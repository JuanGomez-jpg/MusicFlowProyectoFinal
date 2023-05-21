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

                <!-- Inicio -->
                <li class="nav-item mr-4">
                    <a class="nav-link active" href="/albums">
                    <i class="bi bi-house-fill"></i>
                        Inicio
                    </a>
                </li>

                <!-- Albums -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" 
                        href="#" 
                        id="navbarDropdownAlbums" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        <i class="bi bi-disc-fill"></i>
                        Albums
                    </a>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownAlbums">
                        <li>
                            <a class="dropdown-item" href="/albums">Ver albums</a>
                        </li>
                        <li>
                            <a class="dropdown-item"href="/albums/create">Añadir albums</a>
                        </li>
                    </ul>
                </li>

                <!-- Canciones -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" 
                        href="#" 
                        id="navbarDropdownSongs" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        <i class="bi bi-music-note-list"></i>
                        Canciones
                    </a>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownSongs">
                        <li>
                            <a class="dropdown-item" href="/songs">Ver canciones</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/songs/create">Añadir canciones</a>
                        </li>
                    </ul>
                </li>

                <!-- Caratulas -->
                <li class="nav-item mr-4">
                    <a class="nav-link active" href="{{ route('albums.albums-covers') }}">
                    <i class="bi bi-image-fill"></i>
                        Caratulas
                    </a>
                </li>

                <!-- Cuenta -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" 
                        href="#" 
                        id="navbarDropdownAccount" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        Cuenta
                    </a>
                    <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdownAccount">
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a class="dropdown-item" onclick="showLogOut()" href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                            </a>
                            </form>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('downloadPDF') }}">Reporte PDF albums</a>
                        </li>
                    </ul>
                </li>


            </ul>
            <hr class="text-white-50">
            
        </div>

    </div>
</nav>