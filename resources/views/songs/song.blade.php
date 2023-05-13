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
        <div class="container mt-5">
            <br>
            <div class="row">
                <ol class="list-group list-group-numbered mb-1">
                @foreach ($songs as $song)
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        {{ $song -> songName }}
                        <h5><span class="badge bg-dark">{{ $song -> songDuration }}</span></h5>
                    </li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
</body>
</html>