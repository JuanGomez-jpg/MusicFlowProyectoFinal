<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/formulario.css') }}">
    <script type="text/javascript" src="{{ asset('js/img.js') }}"></script>
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <title>Edit Album</title>
</head>
<body>
    <div class="form">
        <form action="/albums/{{$album->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $err)
                            <li> {{ $err }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container mt-5">
                <h1 class="title">Edit Album - {{ $album -> albumName }}</h1>

                <div class="form-field col-lg-6">
                    <label class="form-label" for="albumName">Nombre del album</label>
                    <input type="text" id="albumName" name="albumName" class="form-control" value="{{ old('albumName') ?? $album -> albumName }}" />
                </div>

                <div class="form-field col-lg-6">
                    <label class="form-label" for="artistName">Nombre del artista</label>
                    <input type="text" id="artistName" name="artistName" class="form-control" value="{{ old('artistName') ?? $album -> artistName }}" />
                </div>

                <!-- Number input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="year">Año</label>
                    <input type="number" id="year" name="year" class="form-control" value="{{ old('year') ?? $album -> year }}" />
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="genre">Género</label>
                    <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre') ?? $album -> genre }}" />
                </div>

                <!-- File input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="coverImg">Cover</label>
                    <input type="file" id="coverImg" name="coverImg" class="form-control" onChange="loadFile(event)" />
                </div>
                <br>

                            <!-- <img id="output" style="display: block;" src="data:image/jpeg;base64,{{ base64_encode($album -> coverName) }}" alt="img" width="300" height="300" /> -->
                <img id="output" style="display: block;" src="{{ asset('storage/images/'.$album->coverImg) }}" alt="{{ $album->coverImg }}" height="300" width="300" />
                <br>
                <!-- Submit button -->
                <input class="btn btn-success" type="submit" id="Boton" value="Guardar">
                <a href="/albums" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>