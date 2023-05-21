<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general-background.css') }}" rel="stylesheet">
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    @vite(['resources/js/app.js'])
    <title>Compras</title>
</head>
<body>
    <x-navbaruser />
    <div class="container py-1">
        <div class="row d-flex justify-content-center my-3">
            <div class="col-md-8">
                @foreach ($purchases as $purchase)
                    <div class="card mb-4">
                        <div class="card-header justify-content-between py-3">
                            <h5 class="mb-0"><strong>Fecha de compra:</strong> {{ $purchase['purchase']-> purchaseDate}}</h5>
                            <br>
                            <form action="{{ route('destroy-purchase', $purchase['purchase']->id) }}" id="" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="" class="btn btn-danger w-100">Eliminar (Soft)</button>
                            </form>
                        </div>
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="{{ asset('storage/images/'.$purchase['album']->coverImg) }}"
                                                class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        
                                        <p><strong>{{ $purchase['album'] -> albumName }}</strong></p>
                                        <p>Artista: {{ $purchase['album'] -> artistName }}</p>
                                        <p>Género: {{ $purchase['album'] -> genre }}</p>
                                        <p>Año: {{ $purchase['album'] -> year }}</p>

                                        <p><strong>${{ $purchase['album'] -> price }}</strong></p>
                                       
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <strong>Nombre de la tarjeta:</strong>
                                        <p> {{ $purchase['purchase']-> cardHolderName }}</p>

                                        <strong>Número de tarjeta: </strong>
                                        <p>{{ $purchase['purchase'] -> cardNumber }}</p>
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