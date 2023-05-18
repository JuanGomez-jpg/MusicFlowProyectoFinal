<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/img.js') }}"></script>

    @vite(['resources/js/app.js'])
    
    <title>Create Albums</title>
</head>
<body>
    <x-navbarmain />
    <div class="form">
        <form action="/albums" id="create-album" method="POST" enctype="multipart/form-data">
            @csrf

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
                <h1 class="title">Create album</h1>
                
                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="albumName">Nombre del album</label>
                    <input type="text" id="albumName" name="albumName" class="form-control" value="{{ old('albumName') }}" />
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="artistName">Nombre del artista</label>
                    <input type="text" id="artistName" name="artistName" class="form-control" value="{{ old('artistName') }}" />
                </div>

                <!-- Number input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="year">Año</label>
                    <input type="number" id="year" name="year" class="form-control" value="{{ old('year') }}" />
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="genre">Género</label>
                    <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre') }}" />
                </div>

                <!-- Number input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="price">Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}"></input>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="description">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"></input>
                </div>

                <!-- File input -->
                <div class="form-field col-lg-6">
                    <label class="form-label" for="coverImg">Cover</label>
                    <input type="file" id="coverImg" name="coverImg" class="form-control" onChange="loadFile(event)" />
                </div>
                <br>
                <img id="output" style="display: block;" height="300" width="300" />
                <br>
                <!-- Submit button -->
                <input class="btn btn-success" onclick="confirmationCreateAlbum()" type="submit" id="Boton" value="Guardar">
                <a href="/albums" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>