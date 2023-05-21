<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general-background.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <x-song-frame :$song />
                @endforeach
                </ol>
            </div>
        </div>
    </div>

@if(session('createdSong') == 'Ok')
    <script>
        successCreatedSong();
    </script>
@endif
@if(session('editedSong') == 'Ok')
    <script>
        successEditSong();
    </script>
@endif
@if(session('deleteSong') == 'Ok')
    <script>
        successDeleteSong();
    </script>
@endif


</body>
</html>