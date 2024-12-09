@extends('frontEnd.layout.front');

@section('fronttitle')
    reviews
@endsection

@section('frontContent')
<!-- Page content -->
 <main class="content-wrapper">
    <div class="container py-5 mt-n2 mt-sm-0">
      <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


        <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start pe-lg-0 pe-xl-4" id="accountSidebar">

            <!-- Header -->
            <div class="offcanvas-header d-lg-block py-3 p-lg-0">
              <div class="d-flex align-items-center">
                <div class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0" style="width: 3rem; height: 3rem">S</div>
                <div class="min-w-0 ps-3">
                  <h5 class="h6 mb-1">Susan Gardner</h5>
                  <div class="nav flex-nowrap text-nowrap min-w-0">
                    <a class="nav-link animate-underline text-body p-0" href="#bonusesModal" data-bs-toggle="modal">
                      <svg class="text-warning flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                      <span class="animate-target me-1">100 bonuses</span>
                      <span class="text-body fw-normal text-truncate">available</span>
                    </a>
                  </div>
                </div>
              </div>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
            </div>

            <!-- Body (Navigation) -->
            <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-orders.html">
                  <i class="ci-shopping-bag fs-base opacity-75 me-2"></i>
                  Orders
                  <span class="badge bg-primary rounded-pill ms-auto">1</span>
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-wishlist.html">
                  <i class="ci-heart fs-base opacity-75 me-2"></i>
                  Wishlist
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-payment.html">
                  <i class="ci-credit-card fs-base opacity-75 me-2"></i>
                  Payment methods
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active" href="account-reviews.html">
                  <i class="ci-star fs-base opacity-75 me-2"></i>
                  My reviews
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-info.html">
                  <i class="ci-user fs-base opacity-75 me-2"></i>
                  Personal info
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-addresses.html">
                  <i class="ci-map-pin fs-base opacity-75 me-2"></i>
                  Addresses
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-notifications.html">
                  <i class="ci-bell fs-base opacity-75 mt-1 me-2"></i>
                  Notifications
                </a>
              </nav>
              <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
              <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="help-topics-v1.html">
                  <i class="ci-help-circle fs-base opacity-75 me-2"></i>
                  Help center
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="terms-and-conditions.html">
                  <i class="ci-info fs-base opacity-75 me-2"></i>
                  Terms and conditions
                </a>
              </nav>
              <nav class="list-group list-group-borderless pt-3">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin.html">
                  <i class="ci-log-out fs-base opacity-75 me-2"></i>
                  Log out
                </a>
              </nav>
            </div>
          </div>
        </aside>


        <!-- Reviews content -->
        <div class="col-lg-9">
          <div class="ps-lg-3 ps-xl-0">

            <!-- Page title + Sorting select -->
            <div class="row align-items-center pb-2 mb-sm-1">
              <div class="col-sm-6 col-md-7 col-xxl-8 mb-3 mb-md-0">
                <h1 class="h2 me-3 mb-0">My reviews</h1>
              </div>
              <div class="col-sm-6 col-md-5 col-xxl-4">
                <select class="form-select" data-select="{&quot;removeItemButton&quot;: false}" aria-label="Wishlist sorting">
                  <option value="products-reviews">Products and reviews</option>
                  <option value="reviews">My reviews</option>
                  <option value="products">Products awaiting reviews</option>
                </select>
              </div>
            </div>


            <!-- Review items (List) -->

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/11.png')}}" class="d-block my-xl-1" width="64" alt="Image">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Apple iPad 10.2" 2021 Wi-Fi 64 GB Space Gray (MK2K3RK/A)</a>
              </div>
              <div class="d-flex h6 fs-sm pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="flex-shrink-0 d-md-none" style="width: 64px"></div>
                <svg class="text-warning flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                +100 bonuses for a review
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/12.png')}}" class="d-block my-xl-1" width="64" alt="Image">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Laptop Apple MacBook Pro 13 M2</a>
              </div>
              <div class="position-relative d-flex align-items-center text-decoration-none min-w-0 pt-1 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="flex-shrink-0 d-md-none" style="width: 64px"></div>
                <div class="h6 fs-sm text-body-secondary text-truncate p-0 me-3 me-sm-4 mb-0">+100 bonuses earned</div>
                <div class="d-flex gap-1 fs-sm me-2 me-sm-3">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                </div>
                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#reviewDetails" data-bs-toggle="offcanvas" aria-controls="reviewDetails" aria-label="Show review details">
                  <i class="ci-chevron-right fs-lg"></i>
                </a>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/13.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Razer Opus X Mercury Headphones (RZ04-03760200-R3M1)</a>
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/14.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">3D virtual reality glasses VR Shinecon G10 for smartphones with a large screen</a>
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/15.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Apple iPad Pro M2 2022 64 GB Space Gray</a>
              </div>
              <div class="d-flex h6 fs-sm pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="flex-shrink-0 d-md-none" style="width: 64px"></div>
                <svg class="text-warning flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                +86 bonuses for a review
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/16.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Mobile phone Apple iPhone 14 256GB Starlight</a>
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/17.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Power Bank PBS 10000 mAh Black</a>
              </div>
              <div class="position-relative d-flex align-items-center text-decoration-none min-w-0 pt-1 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="flex-shrink-0 d-md-none" style="width: 64px"></div>
                <div class="d-flex gap-1 fs-sm me-2 me-sm-3">
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star-filled text-warning"></i>
                  <i class="ci-star text-body-tertiary opacity-75"></i>
                </div>
                <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#reviewDetails" data-bs-toggle="offcanvas" aria-controls="reviewDetails" aria-label="Show review details">
                  <i class="ci-chevron-right fs-lg"></i>
                </a>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/18.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">Apple iPhone 14 128GB Blue</a>
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Item -->
            <div class="d-md-flex align-items-center justify-content-between gap-4 border-bottom py-3">
              <div class="nav flex-nowrap position-relative align-items-center">
                <img src="{{asset('frontend/assets/img/shop/electronics/thumbs/19.png')}}" class="d-block my-xl-1" width="64" alt="Product thumb">
                <a class="nav-link stretched-link hover-effect-underline ps-3 p-0" href="shop-product-general-electronics.html">VRB01 Camera Nikon Max</a>
              </div>
              <div class="d-flex pt-2 pt-md-0 ps-3 ps-md-0 mb-2 mb-md-0">
                <div class="d-md-none" style="width: 64px"></div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reviewForm">Leave a review</button>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="pt-3 pb-2 pb-sm-0 mt-2 mt-md-3" aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>



  @endsection
