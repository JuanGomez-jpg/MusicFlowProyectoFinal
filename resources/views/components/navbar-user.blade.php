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

                <!-- Compras -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link active" href="/shopping-cart" >
                        <i class="bi bi-bag-heart-fill"></i>
                        Compras
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
                    </ul>
                </li>


            </ul>
            <hr class="text-white-50">
            
        </div>

    </div>
</nav>