<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    <title>Covers</title>
</head>
<body>
    <x-navbarmain />
    <div class="album py-0">
        <div class="container mt-5">
            <h1 class="display-6">
            <strong>
                Album Covers 
            </strong>
            </h1>
            <br>
            <div class="row">
                @foreach ($albums as $al)
                <div class="col-md-3">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="text-center">
                            <img src="{{ asset('storage/images/'. $al->coverImg) }}" class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
                            <div class="card-body" style="">
                                <a href="{{ route('albums.download-cover', $al) }}" class="btn btn-success">Descargar</a>    
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