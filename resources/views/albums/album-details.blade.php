<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/albums.css') }}">-->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</head>
<body>
  <x-navbarmain />
    <!--
    <div class="row">
    <div class="column">
        <div class="card">
             <img src="data:image/jpeg;base64,{{ base64_encode($album->coverName) }}" height="300" width="300" />
            <img src="{{ asset('storage/images/'.$album->coverImg) }}" height="300" width="300" />
                <br><br><b> {{ $album -> albumName }}</b>
                <br>{{ $album -> artistName }}
                <br>{{ $album -> year }}
                <br>{{ $album -> genre }}
                <br>
                <a href="/albums/" class="button">Inicio</a>
                <a href="/albums/{{ $album->id }}/edit" class="button">Editar</a><br>
                
                <form action="{{ route('albums.destroy', $album) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="buttonDelete">Eliminar</button>
                </form>

        </div>
    </div>
    </div>
-->
  <div class="container mt-5">
  <h1>{{ $album->albumName }}</h1>
    <div class="row">
        <div class="col-md-4">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="text-center">
              <img src="{{ asset('storage/images/'.$album->coverImg) }}" class="card-img-top" style="max-width: 70%; height: auto;" />
            </div>
              <div class="card-body" style="height: 12rem;">
                <p class="card-title">{{ $album -> albumName }}</p>
                <p class="card-text">{{ $album -> artistName }}</p>
                <p class="card-text">{{ $album -> year }}</p>
                <p class="card-text">{{ $album -> genre }}</p>
              </div>

                <div class="card-footer bg-transparent">
                  <div class="text-center">
                    <a href="/albums" class="btn btn-primary">Inicio</a>
                    <a href="/albums/{{ $album->id }}/edit"  class="btn btn-warning">Editar</a>
                    <form action="{{ route('albums.destroy', $album) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
                </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>