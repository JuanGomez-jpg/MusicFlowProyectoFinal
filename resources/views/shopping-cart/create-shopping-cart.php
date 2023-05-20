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
    <title>Compra</title>
</head>
<body>
<x-navbaruser />

<section class="h-100 gradient-custom">
  <div class="container py-3">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{ asset('storage/images/3jrfwj-darksun-preview-m3_550x550.jpg') }}"
                    alt="3jrfwj-darksun-preview-m3_550x550.jpg"
                    class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Blue denim shirt</strong></p>
                <p>Color: blue</p>
                <p>Size: M</p>
                <!-- Price -->
                <p class="">
                  <strong>$17.99</strong>
                </p>
                <!-- Price -->
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="bi bi-heart-fill"></i>
                </button>
                <!-- Data -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{ asset('storage/images/the_devil_wears_prada_color_decay_album_artwork_2022-500x500.jpg') }}"
                    class="mx-auto d-block img-fluid" style="height: auto; max-width: auto;" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Red hoodie</strong></p>
                <p>Color: red</p>
                <p>Size: M</p>
                <!-- Price -->
                <p class="">
                  <strong>$20.99</strong>
                </p>
                <!-- Price -->
                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="bi bi-trash3-fill"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="bi bi-heart-fill"></i>
                </button>
                <!-- Data -->
              </div>
            </div>
            <!-- Single item -->

          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
      </div>


      <div class="col-md-4">

        <div class="card mb-4">
          <div class="card-header py-4">
            <h5 class="mb-0 text-center">Payment</h5>
          </div>
          <div class="card-body">

            <form action="" class="">
              <div class="card-body">
                <ul class="list-group list-group-flush">

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    
                      <p><strong>We only accept</strong></p>
                      <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa" />
                    
                  </li>

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="form-field">
                          <label class="form-label" for="cardHolder">Cardholder's name</label>
                          <input 
                            type="text" 
                            id="cardHolder" 
                            name="cardHolder" 
                            class="form-control" 
                            placeholder="Pancho Pérez"
                             />
                      </div>
                    </div>
                  </li>

                  <li 
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <!-- Text input -->
                    <div class="card-body">
                      <div class="form-field">
                          <label class="form-label" for="cardNumber">Card Number</label>
                          <input 
                            type="text" 
                            id="cardNumber" 
                            name="cardNumber" 
                            class="form-control" 
                            placeholder="1234 5678 9012 3457" 
                            minlength="16" 
                            maxlength="16"
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
                            <label class="form-label" for="typeExp">Expiration</label>
                            <input type="text" id="typeExp" class="form-control"
                              placeholder="MM/YYYY" data-mask="00 / 00" size="7" id="exp" minlength="7" maxlength="7" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <label class="form-label" for="typeText">CVV</label>
                            <input type="password" id="typeText" class="form-control"
                              placeholder="&#9679;&#9679;&#9679;" data-mask="000" size="1" minlength="3" maxlength="3" />
                          </div>
                        </div>
                    </div>
                  </li>

                </ul>
              </div>
            </form>
          </div>
        </div>

        <!-- Summary -->
        <div class="card mb-4">
          <div class="card-header py-4">
            <h5 class="mb-0 text-center">Summary</h5>
          </div>
          <div class="card-body">

            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>$53.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>

            <div class="text-center">
              <button type="button" class="btn btn-warning btn-lg btn-block">
                Proceed to pay
              </button>
            </div>
          </div>
        </div>
        <!-- Summary -->


      </div>



    </div>
  </div>
</section>
</body>
</html>