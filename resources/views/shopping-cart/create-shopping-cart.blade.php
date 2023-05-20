<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/shopping-cart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <title>Compra</title>
</head>
<body>
<section class="h-100 gradient-custom">
<x-navbaruser />
  <div class="container py-1">
    <div class="row d-flex justify-content-center my-3">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Compra</h5>
          </div>
          <div class="card-body">

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{ asset('storage/images/'.$album->coverImg) }}"
                    class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{ $album -> albumName }}</strong></p>
                <p>Artista: {{ $album -> artistName }}</p>
                <p>Género: {{ $album -> genre }}</p>
                <p>Año: {{ $album -> year }}</p>
                <!-- Price -->
                <p class="">
                  <strong>${{ $album -> price }}</strong>
                </p>
                <!-- Price -->
                <a type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Cancelar" href="/albums">
                  Cancelar <i class="bi bi-x-circle-fill"></i>
                </a>
                <!-- Data -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

          </div>
        </div>
      </div>


      <div class="col-md-4">

        <div class="card mb-4">
          <div class="card-header py-4">
            <h5 class="mb-0 text-center">Pago</h5>
          </div>
          <div class="card-body">

            <form action="/shopping-cart" method="POST" class="">
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
              <div class="card-body">
                <ul class="list-group list-group-flush">

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    
                      <p><strong>Solo aceptamos</strong></p>
                      <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa" />
                    
                  </li>

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="form-field">
                          <label class="form-label" for="cardHolder">Nombre del usuario de la tarjeta</label>
                          <input 
                            type="text" 
                            id="cardHolder" 
                            name="cardHolder" 
                            class="form-control" 
                            placeholder="Pancho Pérez"
                            value="{{ old('cardHolder') }}"
                             />
                      </div>
                    </div>
                  </li>

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="form-field">
                          <label class="form-label" for="cardNumber">Número de tarjeta</label>
                          <input 
                            type="text" 
                            id="cardNumber" 
                            name="cardNumber" 
                            class="form-control" 
                            placeholder="1234 5678 9012 3457" 
                            minlength="16" 
                            maxlength="16"
                            value="{{ old('cardNumber') }}"
                            />
                      </div>
                    </div>
                  </li>

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <label class="form-label" for="cardExp">Expiración</label>
                            <input type="text" id="cardExp" class="form-control"
                              placeholder="MM/YYYY" id="cardExp" name="cardExp" data-mask="00/0000" size="7" id="exp" minlength="7" maxlength="7" value="{{ old('cardExp') }}"  />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <label class="form-label" for="typeText">CVV</label>
                            <input type="text" id="typeText" class="form-control"
                              placeholder="&#9679;&#9679;&#9679;" id="CVV" name="CVV" data-mask="000" size="1" minlength="3" maxlength="3" />
                          </div>
                        </div>
                    </div>
                  </li>
                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="row mb-4">
                        <div class="text-center">
                          <input type="submit" class="btn btn-warning btn-lg btn-block" value="Proceder a pagar">
                        </div>                      
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
              <input type="hidden" name="albums_id" value="{{ $album->id }}">
              <input type="hidden" name="price" value="{{ $album->price }}">
            </form>
          </div>
        </div>

        <!-- Summary -->
        <div class="card mb-4">
          <div class="card-header py-4">
            <h5 class="mb-0 text-center">Resumen</h5>
          </div>
          <div class="card-body">

            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                <span>{{ $album -> albumName }} · {{ $album -> artistName }}</span>
              </li>
              <hr>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total:</strong>
                </div>
                <span><strong>${{ $album -> price }}</strong></span>
              </li>
            </ul>


          </div>
        </div>
        <!-- Summary -->


      </div>



    </div>
  </div>
</section>
</body>
</html>