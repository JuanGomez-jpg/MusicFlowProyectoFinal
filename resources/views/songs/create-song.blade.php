<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
    <title>Create Song</title>
</head>
<body>
    <x-navbarmain />
    <div class="form">
        <form action="/songs" method="POST">
            @csrf

            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $err)
                            <li>
                                {{ $err }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container mt-5">
                <h1 class="title">Create song</h1>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label for="songName" class="form-label">Nombre de la canción:</label>
                    <input type="text" id="songName" name="songName" class="form-control" value="{{ old('songName') }}">
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label for="songDuration" class="form-label">Duración:</label>
                    <input type="text" id="songDuration" name="songDuration" class="form-control" value="{{ old('songDuration') }}">
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label for="songLyrics" class="form-label">Letra:</label>
                    <input type="text" id="songLyrics" name="songLyrics" class="form-control" value="{{ old('songLyrics') }}">
                </div>
                <br>

                <!-- Submit button -->
                <input class="btn btn-success" type="submit" id="Boton" value="Guardar">
                <a href="/song" class="btn btn-danger">Cancelar</a>

            </div>

        </form>
    </div>

    
</body>
</html>