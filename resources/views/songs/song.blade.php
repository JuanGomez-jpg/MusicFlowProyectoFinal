<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <title>Songs</title>
</head>
<body>
    <x-navbarmain />
    <div class="album py-0">
        <div class="container mt-3">
            <br>
            <div class="mb-4">
                <strong><h2>Songs</h2></strong>
            </div>
            <div class="row">
                <ol class="list-group list-group-numbered mb-1">
                @foreach ($songs as $song)
                    <li class="list-group-item list-group-item-action d-flex justify-content-between">
                        <div class="ms-2 me-auto">
                            <a href="/songs/{{ $song->id }}" style="color: black; text-decoration: none;">
                                <div class="fw-bold">{{ $song -> songName }}</div>
                                Duración: {{ $song -> songDuration }}
                            </a>
                        </div>
                        
                        <div class="dropdown">
                            <div class="btn-group">
                                <button
                                    type="button"
                                    class="btn btn-secondary dropdown-toggle" 
                                    data-bs-toggle="dropdown" 
                                    aria-expanded="false">
                                    Opciones <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item btn text-light bg-dark w-100" href="/songs/{{ $song -> id }}/edit" style="cursor: pointer;">Editar</a></li>
                                    <li>
                                        <form action="{{ route('songs.destroy', $song) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-light">Eliminar</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
</body>
</html>