
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/albums.css') }}">-->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <title>Albums</title>
</head>
<body>
    <x-navbarmain />
    <!--  
    <div class="row">
        @foreach ($albums as $al)
        <div class="column">
            <div class="card">
                <img src="data:image/jpeg;base64,{{ base64_encode($al->coverName) }}" height="300" width="300" />
                <img src="{{ asset('storage/images/'.$al->coverImg) }}" height="300" width="300" />
                    <br><br><b> {{ $al -> albumName }}</b>
                    <br>{{ $al -> artistName }}
                    <br>
                <a href="/albums/{{ $al->id }}" class="button">Ver</a>
                <a href="/albums/{{ $al->id }}/edit" class="button">Editar</a>
            </div>
        </div>
        @endforeach-->
    <!--</div>-->

    <!--
<div class="row flex-wrap">
  @foreach ($albums as $al)
    <div class="col-md-3">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="height: 20rem; width:20rem;">
        <div class="text-center">
          <img src="{{ asset('storage/images/'.$al->coverImg) }}" class="img-fluid" style="max-width: 40%; height: auto;" />
          <div class="card-body">
            <h5 class="card-title">{{ $al -> albumName }}</h5>
            <p class="card-text">{{ $al -> artistName }}</p>
          </div>
          <div class="card-footer bg-transparent">
            <a href="/albums/{{ $al->id }}" class="btn btn-outline-primary">Ver</a>
            <a href="/albums/{{ $al->id }}/edit" class="btn btn-outline-warning">Editar</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
-->
<div class="album py-0">
  <div class="container mt-5">
    <h1 class="display-6">
      <strong>
        Albums 
      </strong>
      <a href="/albums/create" class="btn btn-success">
        Añadir
      </a>
    </h1>
    <br>
    <div class="row">
      @foreach ($albums as $al)
        <div class="col-md-3">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="text-center">
              <img src="{{ asset('storage/images/'.$al->coverImg) }}" class="mx-auto d-block" style="height: 150px; max-width: 150px;" />
                <div class="card-body" style="height: 7rem;">
                  <strong><h5 class="card-title">{{ $al -> albumName }}</h5></strong>
                  <p class="card-text">{{ $al -> artistName }}</p>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="/albums/{{ $al->id }}" class="btn btn-primary">Ver</a>
                  <a href="/albums/{{ $al->id }}/edit" class="btn btn-warning">Editar</a>
                </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>





</body>
</html>