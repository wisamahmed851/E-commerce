@extends('frontEnd.layout.front');

@section('fronttitle')
    Delivery
@endsection

@section('frontContent')
<!-- Page content -->
<main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container pt-1 pt-md-0 my-3 my-md-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="home-grocery.html">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-grocery.html">Shop</a></li>
        <li class="breadcrumb-item"><a href="checkout-v2-cart.html">Cart</a></li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
    </nav>


    <!-- Checkout form + Order summary -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <h1 class="h3 mb-4">Checkout</h1>
      <div class="row">

        <!-- Checkout form -->
        <div class="col-lg-8 col-xl-7 mb-5 mb-lg-0">

          <!-- Delivery address section -->
          <h2 class="h5 mb-4">Delivery address</h2>
          <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center fs-sm text-dark-emphasis me-3">
              <i class="ci-map-pin fs-base text-primary me-2"></i>
              567 Cherry Souse Lane Sacramento, 95829
            </div>
            <div class="nav">
              <a class="nav-link text-decoration-underline text-nowrap p-0" href="#deliveryOptions" data-bs-toggle="offcanvas" aria-controls="deliveryOptions">Change address</a>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 g-3 g-ms-4 mb-3 mb-sm-4">
            <div class="col">
              <label for="house" class="form-label">House / Flat*</label>
              <input type="text" class="form-control form-control-lg rounded-pill" id="house">
            </div>
            <div class="col">
              <label for="floor" class="form-label">Floor <span class="fw-normal text-body-secondary">(optional)</span></label>
              <input type="text" class="form-control form-control-lg rounded-pill" id="floor">
            </div>
          </div>
          <label for="phone-number" class="form-label">Phone number * <span class="fw-normal text-body-secondary">(We'll contact you in case anything comes up with your order)</span></label>
          <input type="tel" class="form-control form-control-lg rounded-pill" id="phone-number" data-input-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" placeholder="+1 ___ ___ __">

          <!-- Delivery date and time section -->
          <h2 class="h5 mt-5 mb-4">Delivery date and time</h2>
          <div class="d-flex flex-wrap gap-3">
            <div>
              <input type="radio" class="btn-check" name="date" id="today" checked="">
              <label class="btn btn-outline-secondary rounded-pill" for="today">Today</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="date" id="tomorrow">
              <label class="btn btn-outline-secondary rounded-pill" for="tomorrow">Tomorrow</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="date" id="other-date">
              <label class="btn btn-outline-secondary rounded-pill" for="other-date" data-bs-toggle="offcanvas" data-bs-target="#deliveryDateTime" aria-controls="deliveryDateTime">Other date</label>
            </div>
          </div>
          <div class="fs-sm mt-4">The cost of delivery: <span class="fw-semibold text-dark-emphasis">Free</span></div>
          <div class="d-flex flex-wrap gap-3 mt-3">
            <div>
              <input type="radio" class="btn-check" name="time" id="time-1" checked="">
              <label class="btn btn-outline-secondary rounded-pill" for="time-1">10:00 - 12:00</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="time" id="time-2">
              <label class="btn btn-outline-secondary rounded-pill" for="time-2">12:00 - 14:00</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="time" id="time-3">
              <label class="btn btn-outline-secondary rounded-pill" for="time-3">14:00 - 16:00</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="time" id="time-4">
              <label class="btn btn-outline-secondary rounded-pill" for="time-4">16:00 - 18:00</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="time" id="time-5">
              <label class="btn btn-outline-secondary rounded-pill" for="time-5">18:00 - 20:00</label>
            </div>
          </div>

          <!-- Payment method section -->
          <h2 class="h5 mt-5 mb-0">Payment method</h2>
          <div id="paymentMethod" role="list">

            <!-- Credit card -->
            <div class="mt-4">
              <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#card" aria-expanded="true" aria-controls="card">
                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                  <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method" checked="">
                  Credit or debit card
                  <span class="d-none d-sm-flex gap-2 ms-3">
                    <img src="{{asset('frontend/assets/img/payment-methods/amex.svg')}}" class="d-block bg-info rounded-1" width="36" alt="Amex">
                    <img src="{{asset('frontend/assets/img/payment-methods/visa-light-mode.svg')}}" class="d-none-dark" width="36" alt="Visa">
                    <img src="{{asset('frontend/assets/img/payment-methods/visa-dark-mode.svg')}}" class="d-none d-block-dark" width="36" alt="Visa">
                    <img src="{{asset('frontend/assets/img/payment-methods/mastercard.svg')}}" width="36" alt="Mastercard">
                    <img src="{{asset('frontend/assets/img/payment-methods/maestro.svg')}}" width="36" alt="Maestro">
                  </span>
                </label>
              </div>
              <div class="collapse show" id="card" data-bs-parent="#paymentMethod">
                <form class="needs-validation pt-4 pb-2 ps-3 ms-2 ms-sm-3" novalidate="">
                  <div class="position-relative mb-3 mb-sm-4" data-input-format="{&quot;creditCard&quot;: true}">
                    <input type="text" class="form-control form-control-lg form-icon-end rounded-pill" placeholder="Card number" required="">
                    <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3" data-card-icon=""></span>
                  </div>
                  <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                    <div class="col">
                      <input type="text" class="form-control form-control-lg rounded-pill" data-input-format="{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}" placeholder="MM/YY">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control form-control-lg rounded-pill" maxlength="4" data-input-format="{&quot;numeral&quot;: true, &quot;numeralPositiveOnly&quot;: true, &quot;numeralThousandsGroupStyle&quot;: &quot;none&quot;}" placeholder="CVC">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- PayPal -->
            <div class="mt-4">
              <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                  <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                  PayPal
                  <img src="{{asset('frontend/assets/img/payment-methods/paypal-icon.svg')}}" class="ms-3" width="16" alt="PayPal">
                </label>
              </div>
              <div class="collapse" id="paypal" data-bs-parent="#paymentMethod"></div>
            </div>

            <!-- Google Pay -->
            <div class="mt-4">
              <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#googlepay" aria-expanded="false" aria-controls="googlepay">
                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                  <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                  Google Pay
                  <img src="{{asset('frontend/assets/img/payment-methods/google-icon.svg')}}" class="ms-3" width="20" alt="Google Pay">
                </label>
              </div>
              <div class="collapse" id="googlepay" data-bs-parent="#paymentMethod"></div>
            </div>

            <!-- Cash on delivery -->
            <div class="mt-4">
              <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#cash" aria-expanded="false" aria-controls="cash">
                <label class="form-check-label w-100 text-dark-emphasis fw-semibold">
                  <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                  Cash on delivery
                </label>
              </div>
              <div class="collapse" id="cash" data-bs-parent="#paymentMethod">
                <div class="d-sm-flex align-items-center pt-3 pt-sm-4 pb-2 ps-3 ms-2 ms-sm-3">
                  <span class="fs-sm me-3">I would require a change from:</span>
                  <div class="input-group mt-2 mt-sm-0" style="max-width: 150px">
                    <span class="input-group-text rounded-pill rounded-end-0">
                      <i class="ci-dollar-sign"></i>
                    </span>
                    <input type="number" class="form-control rounded-pill rounded-start-0" aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>
              </div>
            </div>

            <!-- Card on delivery -->
            <div class="mt-4">
              <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#card-on-delivery" aria-expanded="false" aria-controls="card-on-delivery">
                <label class="form-check-label text-dark-emphasis fw-semibold">
                  <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                  Card on delivery
                </label>
              </div>
              <div class="collapse" id="card-on-delivery" data-bs-parent="#paymentMethod"></div>
            </div>
          </div>

          <!-- Packaging section -->
          <h2 class="h5 mt-5 mb-4">Packaging</h2>
          <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-4" role="alert">
            We are eco-friendly company 🍏, so we use as little plastic as possible.
          </div>
          <div class="d-flex flex-column gap-3">
            <div class="form-check m-0">
              <input type="radio" class="form-check-input" id="bags" name="packaging">
              <label for="bags" class="form-check-label text-dark-emphasis fw-medium">Branded bags <span class="text-body-secondary">(absorbent polyester)</span></label>
            </div>
            <div class="form-check m-0">
              <input type="radio" class="form-check-input" id="eco" name="packaging">
              <label for="eco" class="form-check-label text-dark-emphasis fw-medium">Eco-friendly packaging <span class="text-body-secondary">(cardboard packaging)</span></label>
            </div>
          </div>
        </div>


        <!-- Order summary (sticky sidebar) -->
        <aside class="col-lg-4 offset-xl-1" style="margin-top: -115px">
          <div class="position-sticky top-0" style="padding-top: 115px">
            <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
              <h2 class="h5 mb-0 me-3">Order summary</h2>
              <div class="nav">
                <a class="nav-link text-decoration-underline p-0" href="checkout-v2-cart.html">Edit</a>
              </div>
            </div>
            <ul class="list-unstyled fs-sm gap-3 mb-0">
              <li class="d-flex justify-content-between">
                Subtotal (8 items):
                <span class="text-dark-emphasis fw-medium">$71.70</span>
              </li>
              <li class="d-flex justify-content-between">
                Saving:
                <span class="text-danger fw-medium">-$2.79</span>
              </li>
              <li class="d-flex justify-content-between">
                Delivery:
                <span class="text-dark-emphasis fw-medium">Free</span>
              </li>
            </ul>
            <div class="border-top pt-4 mt-4">
              <div class="d-flex justify-content-between mb-4">
                <span class="fs-sm">Estimated total:</span>
                <span class="h5 mb-0">$68.91</span>
              </div>
              <div class="alert d-flex alert-warning fs-sm rounded-4 mb-4" role="alert">
                <i class="ci-info fs-lg pe-1 mt-1 me-2"></i>
                <div>There is a weighted product in the cart. The actual amount may differ from the indicated amount.</div>
              </div>
              <div class="mb-4">
                <label for="order-note" class="form-label">Order note</label>
                <textarea class="form-control rounded-5" id="order-note" rows="3"></textarea>
              </div>
              <div class="form-check mb-4">
                <input type="checkbox" class="form-check-input" id="age">
                <label for="age" class="form-check-label">The order has products with age restrictions. I confirm that <span class="fw-semibold">I am at least 18 years old.</span></label>
              </div>
              <a class="btn btn-lg btn-primary w-100 rounded-pill" href="checkout-v2-thankyou.html">
                Confirm the order
                <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </section>
  </main>
@endsection
