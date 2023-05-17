<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Select2 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/albums.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])

        <!-- Styles -->
    @livewireStyles
    <title>Albums</title>
</head>
<body>
  <x-navbarmain />

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

      @if($user -> typeUser === 'Artista')
        <div class="mt-3">
          <a href="/albums/{{ $album->id }}/edit" class="btn btn-warning w-100">Editar</a>
        </div>
      @endif

    </div>

    <div class="col-md-8">
      <br>
      <h3 class="text-primary display-6 mb-4">{{ $album -> albumName }}</h3>
      <p class="text-muted mb-2">{{ $album -> artistName }}</p>
      <p class="mb-4">{{ $album -> genre }} · {{ $album -> year }}</p>

      <h3 class="text-primary mb-4">Canciones del álbum</h3>
      <ol class="list-group list-group-numbered mb-1">
        @foreach($album->songs as $song)
          <li class="list-group-item d-flex justify-content-between">
            <div class="fw-bold md-4">{{ $song -> songName }}</div>
            <div class="ms-auto"><h5><span class="badge bg-dark">{{ $song -> songDuration }}</span></h5></div>
          </li>
        @endforeach
      </ol>

      @if($user -> typeUser === 'Artista')
      <form action="{{ route('albums.add-song', $album) }}" method="POST">
        @csrf
        <h3 class="text-primary mb-4">Agregar canción</h3>
        <div class="form-group">
          <label for="song_id" class="form-label text-primary">Canciones</label>
            <select
              class="songs_select form-select mb-4" 
              name="song_id[]"
              multiple="multiple">
            @foreach ($songs as $song)
              <option
                value="{{ $song -> id }}"
                {{ array_search($song->id, $album->songs->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                {{ $song -> songName }}
              </option>
            @endforeach
            </select>
          
          <div class="mt-4 mb-3">
            <button type="submit" class="btn btn-success">Actualizar</button><br>
          </div>
        </div>
      </form>
      @endif

      <h3 class="text-primary mb-3">Descripción del álbum</h3>
      <div class="" style="word-wrap: break-word;">
        {{ $album -> description }}
      </div>
      <br>

      @if($user -> typeUser === 'Artista')
      <div class="mb-3">
        <form action="{{ route('albums.destroy', $album) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-dark w-100">Eliminar</button>
        </form>
      </div>
      @endif

    </div>
  </div>
</div>

<script>
  $('.songs_select').select2({
    multiple: true
  });
</script>


</body>
</html>