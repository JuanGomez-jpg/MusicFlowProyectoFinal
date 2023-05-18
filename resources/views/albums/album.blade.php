
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/albums.css') }}">-->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <title>Albums</title>
</head>
<body>
    <x-navbarmain />

<div class="album py-0">
  <div class="container mt-5">
    <h1 class="display-6">
      <strong>
        Albums · {{ $user -> name }}
      </strong>
      @if($user -> typeUser === 'Artista')
        <a href="/albums/create" class="btn btn-success">
          Añadir
        </a>
      @endif
    </h1>
    <br>
    <div class="row">
      @foreach ($albums as $al)
        <x-album-frame :$al />
      @endforeach
    </div>
  </div>
</div>

@if(session('deleteAl') == 'Ok')
    <script>
        successDeletedAlbum();
    </script>
@endif
@if(session('createdAl') == 'Ok')
    <script>
        successCreatedAlbum();
    </script>
@endif


</body>
</html>