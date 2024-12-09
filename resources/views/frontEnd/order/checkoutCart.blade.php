@extends('frontEnd.layout.front')

@section('fronttitle')
Checkout
@endsection
@section('frontContent')
<!-- Page content -->
<main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container pt-1 pt-md-0 my-3 my-md-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="home-grocery.html">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-grocery.html">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cart</li>
      </ol>
    </nav>


    <!-- Items in the cart + Order summary -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <h1 class="h3 mb-4">Shopping cart</h1>
      <div class="row">

        <!-- Items list + Delivery / pickup tabs -->
        <div class="col-lg-8">
          <div class="pe-lg-2 pe-xl-3 me-xl-3">

            <!-- Delivery / pickup tabs -->
            <ul class="nav nav-pills nav-justified flex-nowrap flex-column flex-sm-row pb-md-2 mb-4" role="tablist">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link justify-content-start text-start p-3 px-md-4 px-lg-3 px-xl-4 rounded-4 active" id="cart-delivery-tab" data-bs-toggle="pill" data-bs-target="#delivery" role="tab" aria-controls="delivery" aria-selected="true">
                  <span class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success-subtle text-dark-emphasis rounded-circle" style="width: 3rem; height: 3rem">
                    <i class="ci-shopping-bag fs-xl"></i>
                  </span>
                  <span class="ps-3">
                    <span class="h6 d-block mb-1">Delivery</span>
                    <span class="fs-xs fw-normal text-body lh-base">All products are available</span>
                  </span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link justify-content-start text-start p-3 px-md-4 px-lg-3 px-xl-4 rounded-4" id="cart-pickup-tab" data-bs-toggle="pill" data-bs-target="#pickup" role="tab" aria-controls="pickup" aria-selected="false">
                  <span class="d-flex align-items-center justify-content-center flex-shrink-0 bg-info-subtle text-dark-emphasis rounded-circle" style="width: 3rem; height: 3rem">
                    <i class="ci-package fs-xl"></i>
                  </span>
                  <span class="ps-3">
                    <span class="h6 d-block mb-1">Pickup</span>
                    <span class="fs-xs fw-normal text-body lh-base">All products are available</span>
                  </span>
                </button>
              </li>
            </ul>


            <!-- Table of items -->
            <table class="table position-relative z-2 mb-4">
              <thead>
                <tr>
                  <th scope="col" class="fs-sm fw-normal py-3 ps-0"><span class="text-body">Product</span></th>
                  <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-xl-table-cell"><span class="text-body">Price</span></th>
                  <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">Quantity</span></th>
                  <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">Total</span></th>
                  <th scope="col" class="py-0 px-0">
                    <div class="nav justify-content-end">
                      <button type="button" class="nav-link d-inline-block text-decoration-underline text-nowrap py-3 px-0">Clear cart</button>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody class="align-middle">

                <!-- Item -->
                <tr>
                  <td class="py-3 ps-0">
                    <div class="d-flex align-items-center">
                      <a class="position-relative flex-shrink-0" href="shop-product-grocery.html">
                        <span class="badge text-bg-danger position-absolute top-0 start-0">-$2.79</span>
                        <img src="{{asset('frontend/assets/img/shop/grocery/thumbs/01.png')}}" width="110" alt="Thumbnail">
                      </a>
                      <div class="ps-2 ps-xl-3">
                        <h5 class="lh-sm mb-2">
                          <a class="hover-effect-underline fs-sm fw-medium" href="shop-product-grocery.html">Fresh orange Klementina, Spain</a>
                        </h5>
                        <ul class="list-unstyled gap-1 fs-xs mb-0">
                          <li><span class="text-body-secondary">Portion:</span> <span class="text-dark-emphasis fw-medium">1kg</span></li>
                          <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$3.12 <del class="text-body-tertiary fw-normal">$4.05</del></span></li>
                        </ul>
                        <div class="count-input rounded-pill d-md-none mt-3">
                          <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                          </button>
                          <input type="number" class="form-control form-control-sm" value="3" readonly="">
                          <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-xl-table-cell">$3.12 <del class="text-body-tertiary fs-sm fw-normal">$4.05</del></td>
                  <td class="py-3 d-none d-md-table-cell">
                    <div class="count-input rounded-pill">
                      <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control" value="3" readonly="">
                      <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-md-table-cell">$9.36</td>
                  <td class="text-end py-3 px-0">
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </td>
                </tr>

                <!-- Item -->
                <tr>
                  <td class="py-3 ps-0">
                    <div class="d-flex align-items-center">
                      <a class="flex-shrink-0" href="shop-product-grocery.html">
                        <img src="{{asset('frontend/assets/img/shop/grocery/thumbs/02.png')}}" width="110" alt="Thumbnail">
                      </a>
                      <div class="ps-2 ps-xl-3">
                        <h5 class="lh-sm mb-2">
                          <a class="hover-effect-underline fs-sm fw-medium" href="shop-product-grocery.html">Pesto sauce Barilla with basil, Italy</a>
                        </h5>
                        <ul class="list-unstyled gap-1 fs-xs mb-0">
                          <li><span class="text-body-secondary">Portion:</span> <span class="text-dark-emphasis fw-medium">200g</span></li>
                          <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$3.95</span></li>
                        </ul>
                        <div class="count-input rounded-pill d-md-none mt-3">
                          <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                          </button>
                          <input type="number" class="form-control form-control-sm" value="1" readonly="">
                          <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-xl-table-cell">$3.95</td>
                  <td class="py-3 d-none d-md-table-cell">
                    <div class="count-input rounded-pill">
                      <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control" value="1" readonly="">
                      <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-md-table-cell">$3.95</td>
                  <td class="text-end py-3 px-0">
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </td>
                </tr>

                <!-- Item -->
                <tr>
                  <td class="py-3 ps-0">
                    <div class="d-flex align-items-center">
                      <a class="flex-shrink-0" href="shop-product-grocery.html">
                        <img src="{{asset('frontend/assets/img/shop/grocery/thumbs/03.png')}}" width="110" alt="Thumbnail">
                      </a>
                      <div class="ps-2 ps-xl-3">
                        <h5 class="lh-sm mb-2">
                          <a class="hover-effect-underline fs-sm fw-medium" href="shop-product-grocery.html">Steak salmon fillet with rosmary</a>
                        </h5>
                        <ul class="list-unstyled gap-1 fs-xs mb-0">
                          <li><span class="text-body-secondary">Portion:</span> <span class="text-dark-emphasis fw-medium">1kg</span></li>
                          <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$27.00</span></li>
                        </ul>
                        <div class="count-input rounded-pill d-md-none mt-3">
                          <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                          </button>
                          <input type="number" class="form-control form-control-sm" value="2" readonly="">
                          <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-xl-table-cell">$27.00</td>
                  <td class="py-3 d-none d-md-table-cell">
                    <div class="count-input rounded-pill">
                      <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control" value="2" readonly="">
                      <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-md-table-cell">$54.00</td>
                  <td class="text-end py-3 px-0">
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </td>
                </tr>

                <!-- Item -->
                <tr>
                  <td class="py-3 ps-0">
                    <div class="d-flex align-items-center">
                      <a class="flex-shrink-0" href="shop-product-grocery.html">
                        <img src="{{asset('frontend/assets/img/shop/grocery/thumbs/04.png')}}" width="110" alt="Thumbnail">
                      </a>
                      <div class="ps-2 ps-xl-3">
                        <h5 class="lh-sm mb-2">
                          <a class="hover-effect-underline fs-sm fw-medium" href="shop-product-grocery.html">Sprite soda lemon lime, can</a>
                        </h5>
                        <ul class="list-unstyled gap-1 fs-xs mb-0">
                          <li><span class="text-body-secondary">Portion:</span> <span class="text-dark-emphasis fw-medium">330ml</span></li>
                          <li class="d-xl-none"><span class="text-body-secondary">Price:</span> <span class="text-dark-emphasis fw-medium">$0.80</span></li>
                        </ul>
                        <div class="count-input rounded-pill d-md-none mt-3">
                          <button type="button" class="btn btn-sm btn-icon" data-decrement="" aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                          </button>
                          <input type="number" class="form-control form-control-sm" value="2" readonly="">
                          <button type="button" class="btn btn-sm btn-icon" data-increment="" aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-xl-table-cell">$0.80</td>
                  <td class="py-3 d-none d-md-table-cell">
                    <div class="count-input rounded-pill">
                      <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control" value="2" readonly="">
                      <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="h6 py-3 d-none d-md-table-cell">$1.60</td>
                  <td class="text-end py-3 px-0">
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="nav position-relative z-2 mb-4 mb-lg-0">
              <a class="nav-link animate-underline px-0" href="shop-catalog-grocery.html">
                <i class="ci-chevron-left fs-lg me-1"></i>
                <span class="animate-target">Continue shopping</span>
              </a>
            </div>
          </div>
        </div>


        <!-- Order summary (sticky sidebar) -->
        <aside class="col-lg-4" style="margin-top: -115px">
          <div class="position-sticky top-0" style="padding-top: 115px">
            <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-4" role="alert">
              Congratulations 🎉 You have added more than <span class="fw-semibold">$50</span> to your cart. <span class="fw-semibold">Delivery is free</span> for you!
            </div>
            <h2 class="h5 border-bottom pb-4 mb-4 me-3">Order summary</h2>
            <div class="tab-content">

              <!-- Delivery tab -->
              <div class="tab-pane show active" id="delivery" role="tabpanel" aria-labelledby="cart-delivery-tab">
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
                  <div class="d-flex justify-content-between mb-3">
                    <span class="fs-sm">Estimated total:</span>
                    <span class="h5 mb-0">$68.91</span>
                  </div>
                  <a class="btn btn-lg btn-primary w-100 rounded-pill" href="checkout-v2-delivery.html">
                    Proceed to checkout
                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                  </a>
                </div>
              </div>

              <!-- Pickup tab -->
              <div class="tab-pane" id="pickup" role="tabpanel" aria-labelledby="cart-pickup-tab">
                <ul class="list-unstyled fs-sm gap-3 mb-0">
                  <li class="d-flex justify-content-between">
                    Subtotal (8 items):
                    <span class="text-dark-emphasis fw-medium">$71.70</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    Saving:
                    <span class="text-danger fw-medium">-$2.79</span>
                  </li>
                </ul>
                <div class="border-top pt-4 mt-4">
                  <div class="d-flex justify-content-between mb-3">
                    <span class="fs-sm">Estimated total:</span>
                    <span class="h5 mb-0">$68.91</span>
                  </div>
                  <a class="btn btn-lg btn-primary w-100 rounded-pill" href="checkout-v2-pickup.html">
                    Proceed to checkout
                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </section>
  </main>
@endsection
