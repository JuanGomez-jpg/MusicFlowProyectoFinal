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
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/albums.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <title>Albums</title>
</head>
<body>
  <x-navbarmain />
<!--
  <div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="text-center">
              <img src="{{ asset('storage/images/'.$album->coverImg) }}" class="mx-auto d-block" style="max-width: 70%; height: auto;" />
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
-->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <img src="{{ asset('storage/images/'.$album->coverImg) }}" class="mx-auto d-block img-fluid rounded" style="height: auto; max-width: auto;">
      
      @if($user -> typeUser !== 'Artista')
      <div class="mt-3">
        <a href="#" class="btn btn-outline-primary w-100">Comprar</a>
      </div>
      @endif

      <div class="mt-3">
        <a href="/albums" class="btn btn-primary w-100">Inicio</a><br>
      </div>
      <div class="mt-3">
        <a href="/albums/{{ $album->id }}/edit" class="btn btn-warning w-100">Editar</a>
      </div>
    </div>
    <div class="col-md-8">
      <br>
      <h3 class="text-primary display-6 mb-4">{{ $album -> albumName }}</h3>
      <p class="text-muted mb-2">{{ $album -> artistName }}</p>
      <p class="mb-4">{{ $album -> genre }} · {{ $album -> year }}</p>

      <h3 class="text-primary mb-4">Canciones del álbum</h3>
      <ul class="list-group mb-4">
        @foreach($songs as $song)
          <li class="list-group-item list-group-item-action">{{ $song -> name }}</li>
        @endforeach
      </ul>
      <h3 class="text-primary mb-3">Descripción del álbum</h3>
      <div class="" style="word-wrap: break-word;">
        {{ $album -> description }}
      </div>
      <br>
      <div class="mb-3">
        <form action="{{ route('albums.destroy', $album) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-dark w-100">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>



</body>
</html>