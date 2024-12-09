<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<!-- Mirrored from cartzilla-html.createx.studio/contact-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 15:38:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Contact v.1</title>
    <meta name="description" content="Cartzilla - Multipurpose E-Commerce Bootstrap HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/app-icons/icon-32x32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/app-icons/icon-180x180.png')}}">

    <!-- Theme switcher (color modes) -->
    <script src="{{asset('frontend/assets/js/theme-switcher.js')}}"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="{{asset('frontend/assets/fonts/inter-variable-latin.woff2')}}" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="{{asset('frontend/assets/icons/cartzilla-icons.woff2')}}" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="{{asset('frontend/assets/icons/cartzilla-icons.min.css')}}">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/simplebar/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/glightbox/glightbox.min.css')}}">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{asset('frontend/assets/css/theme.min.css')}}" as="style">
    <link rel="preload" href="{{asset('frontend/assets/css/theme.rtl.min.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.min.css')}}" id="theme-styles">

    <!-- Customizer -->
    <script src="{{asset('frontend/assets/js/customizer.min.js')}}"></script>
  </head>


  <!-- Body -->
  <body>

    <!-- Customizer offcanvas -->
    <div class="offcanvas offcanvas-end" id="customizer" tabindex="-1">
      <div class="offcanvas-header border-bottom">
        <h4 class="h5 offcanvas-title">Customize theme</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <!-- Customizer settings -->
        <div class="customizer-collapse collapse show" id="customizerSettings">

          <!-- Colors -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center mb-3">
              <i class="ci-paint text-body-tertiary fs-5 me-2"></i>
              <h5 class="fs-lg mb-0">Colors</h5>
            </div>
            <div class="row row-cols-2 g-3" id="theme-colors">
              <div class="col">
                <h6 class="fs-sm mb-2">Primary</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-primary" data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f55266">
                  <label for="primary" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f55266"></label>
                  <input type="color" class="visually-hidden" id="primary" value="#f55266">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Success</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-success" data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#33b36b">
                  <label for="success" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #33b36b"></label>
                  <input type="color" class="visually-hidden" id="success" value="#33b36b">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Warning</h6>
                <div class="color-swatch d-flex border rounded gap-3 p-2" id="theme-warning" data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#fc9231">
                  <label for="warning" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #fc9231"></label>
                  <input type="color" class="visually-hidden" id="warning" value="#fc9231">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Danger</h6>
                <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-danger" data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#f03d3d">
                  <label for="danger" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #f03d3d"></label>
                  <input type="color" class="visually-hidden" id="danger" value="#f03d3d">
                </div>
              </div>
              <div class="col">
                <h6 class="fs-sm mb-2">Info</h6>
                <div class="color-swatch d-flex border rounded gap-2 p-2" id="theme-info" data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
                  <input type="text" class="form-control bg-transparent border-0 rounded-0 p-1" value="#2f6ed5">
                  <label for="info" class="ratio ratio-1x1 flex-shrink-0 w-100 cursor-pointer rounded-circle" style="max-width: 38px; background-color: #2f6ed5"></label>
                  <input type="color" class="visually-hidden" id="info" value="#2f6ed5">
                </div>
              </div>
            </div>
          </div>

          <!-- Direction -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center pb-1 mb-2">
              <i class="ci-sort text-body-tertiary fs-lg me-2" style="transform: rotate(90deg)"></i>
              <h5 class="fs-lg mb-0">Direction</h5>
            </div>
            <div class="d-flex align-items-center justify-content-between border rounded p-3">
              <div class="me-3">
                <h6 class="mb-1">RTL</h6>
                <p class="fs-sm mb-0">Change text direction</p>
              </div>
              <div class="form-check form-switch m-0">
                <input type="checkbox" class="form-check-input" role="switch" id="rtl-switch">
              </div>
            </div>
            <div class="alert alert-info p-2 mt-2 mb-0">
              <div class="d-flex text-body-emphasis fs-xs py-1 pe-1">
                <i class="ci-info text-info fs-lg mb-2 mb-sm-0" style="margin-top: .125rem"></i>
                <div class="ps-2">To switch the text direction of your webpage from LTR to RTL, please consult the detailed instructions provided in the relevant section of our documentation.</div>
              </div>
            </div>
          </div>

          <!-- Border width -->
          <div class="pb-4 mb-2">
            <div class="d-flex align-items-center pb-1 mb-2">
              <i class="ci-menu text-body-tertiary fs-lg me-2"></i>
              <h5 class="fs-lg mb-0">Border width, px</h5>
            </div>
            <div class="slider-input d-flex align-items-center gap-3 border rounded p-3" id="border-input">
              <input type="range" class="form-range" min="0" max="10" step="1" value="1">
              <input type="number" class="form-control" id="border-width" min="0" max="10" value="1" style="max-width: 5.5rem">
            </div>
          </div>

          <!-- Rounding -->
          <div class="d-flex align-items-center pb-1 mb-2">
            <i class="ci-maximize text-body-tertiary fs-lg me-2"></i>
            <h5 class="fs-lg mb-0">Rounding, rem</h5>
          </div>
          <div class="slider-input d-flex align-items-center gap-3 border rounded p-3">
            <input type="range" class="form-range" min="0" max="5" step=".05" value="0.5">
            <input type="number" class="form-control" id="border-radius" min="0" max="5" step=".05" value="0.5" style="max-width: 5.5rem">
          </div>
        </div>

        <!-- Customizer code -->
        <div class="customizer-collapse collapse" id="customizerCode">
          <div class="nav mb-3">
            <a class="nav-link animate-underline fs-base p-0" href=".html" data-bs-toggle="collapse" aria-expanded="true" aria-controls="customizerSettings customizerCode">
              <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
              <span class="animate-target">Back to settings</span>
            </a>
          </div>
          <p class="fs-sm pb-1">To apply the provided styles to your webpage, enclose them within a <code>&lt;style&gt;</code> tag and insert this tag into the <code>&lt;head&gt;</code> section of your HTML document after the following link to the main stylesheet:<br><code>&lt;link href="{{asset('frontend/assets/css/theme.min.css')}}"&gt;</code></p>
          <div class="position-relative bg-body-tertiary rounded overflow-hidden pt-3">
            <div class="position-absolute top-0 start-0 w-100 p-3">
              <button type="button" class="btn btn-sm btn-outline-dark w-100" data-copy-text-from="#generated-styles" data-done-label="Code copied">
                <i class="ci-copy fs-sm me-1"></i>
                Copy code
              </button>
            </div>
            <pre class="text-wrap bg-transparent border-0 fs-xs text-body-emphasis p-4 pt-5" id="generated-styles"></pre>
          </div>
        </div>
      </div>

      <!-- Offcanvas footer (Action buttons) -->
      <div class="offcanvas-header border-top gap-3 d-none" id="customizer-btns">
        <button type="button" class="btn btn-lg btn-secondary w-100 fs-sm" id="customizer-reset">
          <i class="ci-trash fs-lg me-2 ms-n1"></i>
          Reset
        </button>
        <button class="btn btn-lg btn-primary hiding-collapse-toggle w-100 fs-sm collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".customizer-collapse" aria-expanded="false" aria-controls="customizerSettings customizerCode">
          <i class="ci-code fs-lg me-2 ms-n1"></i>
          Show code
        </button>
      </div>
    </div>


    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$53</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 78%"></div>
          <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 78%"></div>
        </div>
      </div>

      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion.html">
            <img src="{{asset('frontend/assets/img/shop/fashion/thumbs/07.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Leather sneakers with golden laces</a>
            </h5>
            <div class="h6 pb-1 mb-2">$74.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion.html">
            <img src="{{asset('frontend/assets/img/shop/fashion/thumbs/08.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Classic cotton men's shirt</a>
            </h5>
            <div class="h6 pb-1 mb-2">$27.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion.html">
            <img src="{{asset('frontend/assets/img/shop/fashion/thumbs/09.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Polarized sunglasses for men</a>
            </h5>
            <div class="h6 pb-1 mb-2">$96.00 <del class="text-body-tertiary fs-xs fw-normal">112.00</del></div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header flex-column align-items-start">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
          <span class="text-light-emphasis">Subtotal:</span>
          <span class="h6 mb-0">$197.00</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100" href="#!">View cart</a>
          <a class="btn btn-lg btn-dark w-100" href="#!">Checkout</a>
        </div>
      </div>
    </div>


    <!-- Search offcanvas -->
    <div class="offcanvas offcanvas-top" id="searchBox" data-bs-backdrop="static" tabindex="-1">
      <div class="offcanvas-header border-bottom p-0 py-lg-1">
        <form class="container d-flex align-items-center">
          <input type="search" class="form-control form-control-lg fs-lg border-0 rounded-0 py-3 ps-0" placeholder="Search the products" data-autofocus="offcanvas">
          <button type="reset" class="btn-close fs-lg" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </form>
      </div>
      <div class="offcanvas-body px-0">
        <div class="container text-center">
          <svg class="text-body-tertiary opacity-60 mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 512 512" fill="currentColor"><path d="M340.115,361.412l-16.98-16.98c-34.237,29.36-78.733,47.098-127.371,47.098C87.647,391.529,0,303.883,0,195.765S87.647,0,195.765,0s195.765,87.647,195.765,195.765c0,48.638-17.738,93.134-47.097,127.371l16.98,16.98l11.94-11.94c5.881-5.881,15.415-5.881,21.296,0l112.941,112.941c5.881,5.881,5.881,15.416,0,21.296l-45.176,45.176c-5.881,5.881-15.415,5.881-21.296,0L328.176,394.648c-5.881-5.881-5.881-15.416,0-21.296L340.115,361.412z M195.765,361.412c91.484,0,165.647-74.163,165.647-165.647S287.249,30.118,195.765,30.118S30.118,104.28,30.118,195.765S104.28,361.412,195.765,361.412z M360.12,384l91.645,91.645l23.88-23.88L384,360.12L360.12,384z M233.034,233.033c5.881-5.881,15.415-5.881,21.296,0c5.881,5.881,5.881,15.416,0,21.296c-32.345,32.345-84.786,32.345-117.131,0c-5.881-5.881-5.881-15.415,0-21.296c5.881-5.881,15.416-5.881,21.296,0C179.079,253.616,212.45,253.616,233.034,233.033zM135.529,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588c12.475,0,22.588,10.113,22.588,22.588C158.118,170.593,148.005,180.706,135.529,180.706z M256,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588s22.588,10.113,22.588,22.588C278.588,170.593,268.475,180.706,256,180.706z"></path></svg>
          <h6 class="mb-2">Your search results will appear here</h6>
          <p class="fs-sm mb-0">Start typing in the search field above to see instant search results.</p>
        </div>
      </div>
    </div>


    <!-- Topbar -->
    <div class="alert alert-dismissible bg-dark text-white rounded-0 py-2 px-0 m-0 fade show" data-bs-theme="dark">
      <div class="container position-relative d-flex min-w-0">
        <div class="d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto mt-n1" style="max-width: 458px">
          <div class="nav me-2">
            <button type="button" class="nav-link fs-lg p-0" id="topbarPrev" aria-label="Prev">
              <i class="ci-chevron-left"></i>
            </button>
          </div>
          <div class="swiper fs-sm text-white" data-swiper="{
            &quot;spaceBetween&quot;: 24,
            &quot;loop&quot;: true,
            &quot;autoplay&quot;: {
              &quot;delay&quot;: 5000,
              &quot;disableOnInteraction&quot;: false
            },
            &quot;navigation&quot;: {
              &quot;prevEl&quot;: &quot;#topbarPrev&quot;,
              &quot;nextEl&quot;: &quot;#topbarNext&quot;
            }
          }">
            <div class="swiper-wrapper min-w-0">
              <div class="swiper-slide text-truncate text-center">🎉 Free Shipping on orders over $250. <span class="d-none d-sm-inline">Don't miss a discount!</span></div>
              <div class="swiper-slide text-truncate text-center">💰 Money back guarantee. <span class="d-none d-sm-inline">We return money within 30 days.</span></div>
              <div class="swiper-slide text-truncate text-center">💪 Friendly 24/7 customer support. <span class="d-none d-sm-inline">We've got you covered!</span></div>
            </div>
          </div>
          <div class="nav ms-2">
            <button type="button" class="nav-link fs-lg p-0" id="topbarNext" aria-label="Next">
              <i class="ci-chevron-right"></i>
            </button>
          </div>
        </div>
        <button type="button" class="btn-close position-static flex-shrink-0 p-1 ms-3 ms-md-n4" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar="{&quot;offset&quot;: 500}">
      <div class="container py-2 py-lg-3">
        <div class="d-flex align-items-center gap-3">

          <!-- Mobile offcanvas menu toggler (Hamburger) -->
          <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Country slect visible on screens > 768px wide (md breakpoint) -->
          <div class="dropdown d-none d-md-block nav">
            <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
              <div class="ratio ratio-1x1" style="width: 20px">
                <img src="{{asset('frontend/assets/img/flags/en-us.png')}}" alt="USA">
              </div>
            </a>
            <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="{{asset('frontend/assets/img/flags/en-uk.png')}}" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
                  United Kingdom
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="{{asset('frontend/assets/img/flags/fr.png')}}" class="flex-shrink-0 me-2" width="20" alt="France">
                  France
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="{{asset('frontend/assets/img/flags/de.png')}}" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
                  Deutschland
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="{{asset('frontend/assets/img/flags/it.png')}}" class="flex-shrink-0 me-2" width="20" alt="Italia">
                  Italia
                </a>
              </li>
            </ul>
          </div>

          <!-- City slect visible on screens > 768px wide (md breakpoint) -->
          <div class="dropdown d-none d-md-block nav">
            <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="animate-target">Washington</span>
            </a>
            <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
              <li><a class="dropdown-item" href="#!">Chicago</a></li>
              <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
              <li><a class="dropdown-item" href="#!">New York</a></li>
              <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
            </ul>
          </div>
        </div>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand fs-2 py-0 m-0 me-auto me-sm-n5" href="{{route('front.index')}}">Cartzilla</a>

        <!-- Button group -->
        <div class="d-flex align-items-center">

          <!-- Navbar stuck nav toggler -->
          <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Theme switcher (light/dark/auto) -->
          <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="ci-sun"></i>
              </span>
            </button>
            <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
              <li>
                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-sun"></i>
                  </span>
                  <span class="theme-label">Light</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-moon"></i>
                  </span>
                  <span class="theme-label">Dark</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-auto"></i>
                  </span>
                  <span class="theme-label">Auto</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
            </ul>
          </div>

          <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
          <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox" aria-label="Toggle search bar">
            <i class="ci-search animate-target"></i>
          </button>

          <!-- Account button visible on screens > 768px wide (md breakpoint) -->
          <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html">
            <i class="ci-user animate-target"></i>
            <span class="visually-hidden">Account</span>
          </a>

          <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
          <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="#!">
            <i class="ci-heart animate-target"></i>
            <span class="visually-hidden">Wishlist</span>
          </a>

          <!-- Cart button -->
          <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
            <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
            <i class="ci-shopping-bag animate-target me-1"></i>
          </button>
        </div>
      </div>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!-- Country and City slects visible on screens < 768px wide (md breakpoint) -->
          <div class="offcanvas-header gap-3 d-md-none pt-0 pb-3">
            <div class="dropdown nav">
              <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
                <div class="ratio ratio-1x1" style="width: 20px">
                  <img src="{{asset('frontend/assets/img/flags/en-us.png')}}" alt="USA">
                </div>
              </a>
              <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="{{asset('frontend/assets/img/flags/en-uk.png')}}" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
                    United Kingdom
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="{{asset('frontend/assets/img/flags/fr.png')}}" class="flex-shrink-0 me-2" width="20" alt="France">
                    France
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="{{asset('frontend/assets/img/flags/de.png')}}" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
                    Deutschland
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="{{asset('frontend/assets/img/flags/it.png')}}" class="flex-shrink-0 me-2" width="20" alt="Italia">
                    Italia
                  </a>
                </li>
              </ul>
            </div>
            <div class="dropdown nav">
              <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="animate-target">Washington</span>
              </a>
              <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
                <li><a class="dropdown-item" href="#!">Chicago</a></li>
                <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
                <li><a class="dropdown-item" href="#!">New York</a></li>
                <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
              </ul>
            </div>
          </div>
          <div class="offcanvas-body pt-1 pb-3 py-lg-0">
            <div class="container pb-lg-2 px-0 px-lg-3">

              <div class="position-relative d-lg-flex align-items-center justify-content-between">

                <!-- Categories mega menu -->
                <div class="navbar-nav">
                  <div class="dropdown position-static pb-lg-2">
                    <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
                      <i class="ci-menu fs-lg me-2"></i>
                      <span class="animate-target">Categories</span>
                    </button>
                    <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

                      <!-- Nav tabs -->
                      <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase active" id="womens-tab" data-bs-toggle="tab" data-bs-target="#womens-tab-pane" role="tab" aria-controls="womens-tab-pane" aria-selected="true">
                            Women's
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase" id="mens-tab" data-bs-toggle="tab" data-bs-target="#mens-tab-pane" role="tab" aria-controls="mens-tab-pane" aria-selected="false">
                            Men's
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-tab-pane" role="tab" aria-controls="kids-tab-pane" aria-selected="false">
                            Kids'
                          </button>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content pb-xl-4">

                        <!-- Women's tab -->
                        <div class="tab-pane fade show active" id="womens-tab-pane" role="tabpanel" aria-labelledby="womens-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Clothing</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Shirts &amp; Tops</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Underwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Dresses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Swimwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Shoes</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Heels</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Loafers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Slippers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Oxfords</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Handbags</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Eyewear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Watches</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Jewelry</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Specialty Sizes</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Plus Size</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Petite</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Wide Shoes</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Narrow Shoes</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Women's<br>Heels<br>Collection</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="light">Shop now</a>
                                  </div>
                                </div>
                                <img src="{{asset('frontend/assets/img/mega-menu/fashion/01.jpg')}}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Men's tab -->
                        <div class="tab-pane fade" id="mens-tab-pane" role="tabpanel" aria-labelledby="mens-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Clothing</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">T-Shirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Jeans</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Underwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Pants</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Shoes</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Oxfords</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Loafers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Slippers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Backpacks</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sunglasses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Bags</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Watches</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Specialty Shops</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Active Wear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sports Clothing</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Athletic Shoes</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="dark">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Men's<br>Sunglasses<br>Offers</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="dark">Shop now</a>
                                  </div>
                                </div>
                                <img src="{{asset('frontend/assets/img/mega-menu/fashion/02.jpg')}}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Kids' tab -->
                        <div class="tab-pane fade" id="kids-tab-pane" role="tabpanel" aria-labelledby="kids-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Boys</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Pants</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Shorts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Girls</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Shirts &amp; Tops</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Dresses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Hoodies</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion.html">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Backpacks</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Gloves</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Shoe Laces</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Scarves</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Shop by Age</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Infant</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Toddler</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Little Kid</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Big Kid</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Kids'<br>Spring<br>Collection</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="light">Shop now</a>
                                  </div>
                                </div>
                                <img src="{{asset('frontend/assets/img/mega-menu/fashion/03.jpg')}}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Navbar nav -->
                <ul class="navbar-nav position-relative me-xl-n5">
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-electronics.html">
                          <span class="fw-medium">Electronics Store</span>
                          <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/electronics-light.jpg')}}" alt="Electronics Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/electronics-dark.jpg')}}" alt="Electronics Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-fashion-v1.html">
                          <span class="fw-medium">Fashion Store v.1</span>
                          <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/fashion-1-light.jpg')}}" alt="Fashion Store v.1">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/fashion-1-dark.jpg')}}" alt="Fashion Store v.1">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-fashion-v2.html">
                          <span class="fw-medium">Fashion Store v.2</span>
                          <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/fashion-2-light.jpg')}}" alt="Fashion Store v.2">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/fashion-2-dark.jpg')}}" alt="Fashion Store v.2">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-furniture.html">
                          <span class="fw-medium">Furniture Store</span>
                          <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/furniture-light.jpg')}}" alt="Furniture Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/furniture-dark.jpg')}}" alt="Furniture Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-grocery.html">
                          <span class="fw-medium">Grocery Store</span>
                          <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/grocery-light.jpg')}}" alt="Grocery Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/grocery-dark.jpg')}}" alt="Grocery Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-marketplace.html">
                          <span class="fw-medium">Marketplace</span>
                          <span class="d-block fs-xs text-body-secondary">Multi-vendor, digital goods</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/marketplace-light.jpg')}}" alt="Marketplace">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/marketplace-dark.jpg')}}" alt="Marketplace">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-single-store.html">
                          <span class="fw-medium">Single Product Store</span>
                          <span class="d-block fs-xs text-body-secondary">Single product / mono brand</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/single-store-light.jpg')}}" alt="Single Product Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="{{asset('frontend/assets/img/mega-menu/demo-preview/single-store-dark.jpg')}}" alt="Single Product Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown position-static pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu p-4" style="--cz-dropdown-spacer: .75rem">
                      <div class="d-flex flex-column flex-lg-row gap-4">
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Electronics Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics.html">Categories Page</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics.html">Product General Info</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics.html">Product Details</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics.html">Product Reviews</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Fashion Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Product Page</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Furniture Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture.html">Product Page</a>
                            </li>
                          </ul>
                        </div>
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Grocery Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery.html">Product Page</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Marketplace</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-marketplace.html">Catalog with Top Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-marketplace.html">Digital Product Page</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-marketplace.html">Cart / Checkout</a>
                            </li>
                          </ul>
                        </div>
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Checkout v.1</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart.html">Shopping Cart</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping.html">Shipping Address</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment.html">Payment</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou.html">Thank You Page</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Checkout v.2</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Shopping Cart</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Delivery Info</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup.html">Pickup from Store</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou.html">Thank You Page</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                          <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                          <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop User</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                          <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                          <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                          <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a></li>
                          <li><a class="dropdown-item" href="account-info.html">Personal Info</a></li>
                          <li><a class="dropdown-item" href="account-addresses.html">Addresses</a></li>
                          <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Marketplace User</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-marketplace-dashboard.html">Dashboard</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-products.html">Products</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-sales.html">Sales</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-payouts.html">Payouts</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-purchases.html">Purchases</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-favorites.html">Favorites</a></li>
                          <li><a class="dropdown-item" href="account-marketplace-settings.html">Settings</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                          <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
                          <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
                          <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
                          <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a></li>
                          <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                          <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                          <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a></li>
                          <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a></li>
                          <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single Article v.1</a></li>
                          <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single Article v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a></li>
                          <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
                          <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
                          <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                    </ul>
                  </li>
                  <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
                    <a class="nav-link" href="docs/installation.html">Docs</a>
                  </li>
                  <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
                    <a class="nav-link" href="docs/typography.html">Components</a>
                  </li>
                </ul>

                <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
                <button type="button" class="btn btn-outline-secondary justify-content-start w-100 px-3 mb-lg-2 ms-3 d-none d-lg-inline-flex" style="max-width: 240px" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox">
                  <i class="ci-search fs-base ms-n1 me-2"></i>
                  <span class="text-body-tertiary fw-normal">Search</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
          <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
              <a class="nav-link border-end" href="account-signin.html">
                <i class="ci-user fs-lg opacity-60 me-2"></i>
                Account
              </a>
              <a class="nav-link" href="#!">
                <i class="ci-heart fs-lg opacity-60 me-2"></i>
                Wishlist
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">


      <!-- Page title -->
      <section class="position-relative bg-body-tertiary py-4">
        <img src="{{asset('frontend/assets/img/contact/title-bg.png')}}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Background image">
        <div class="container position-relative z-2 py-4 py-md-5 my-lg-3 my-xl-4 my-xxl-5">
          <div class="row pt-lg-2 pb-2 pb-sm-3 pb-lg-4">
            <div class="col-9 col-md-8 col-lg-6">
              <h1 class="display-4 mb-lg-4">Contact us</h1>
              <p class="mb-0">Feel free to contact us and we will be happy to help you!</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact details -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5 mb-n3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pt-lg-2 pt-xl-0">

          <!-- Location -->
          <div class="col">
            <div class="d-flex align-items-center">
              <i class="ci-map-pin fs-lg text-dark-emphasis"></i>
              <h3 class="h6 ps-2 ms-1 mb-0">Store location</h3>
            </div>
            <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
            <ul class="list-unstyled">
              <li>New York 11741, USA</li>
              <li>396 Lillian Bolavandy, Holbrook</li>
            </ul>
          </div>

          <!-- Phones -->
          <div class="col">
            <div class="d-flex align-items-center">
              <i class="ci-phone-outgoing fs-lg text-dark-emphasis"></i>
              <h3 class="h6 ps-2 ms-1 mb-0">Call us directly</h3>
            </div>
            <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
            <ul class="list-unstyled">
              <li>Customers: 1 50 537 53 082</li>
              <li>Franchise: 1 50 537 53 000</li>
            </ul>
          </div>

          <!-- Emails -->
          <div class="col">
            <div class="d-flex align-items-center">
              <i class="ci-mail fs-lg text-dark-emphasis"></i>
              <h3 class="h6 ps-2 ms-1 mb-0">Send a message</h3>
            </div>
            <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
            <ul class="list-unstyled">
              <li>Customers: help@cartzilla.com</li>
              <li>Franchise: franchise@catzilla.com</li>
            </ul>
          </div>

          <!-- Working hours -->
          <div class="col">
            <div class="d-flex align-items-center">
              <i class="ci-clock fs-lg text-dark-emphasis"></i>
              <h3 class="h6 ps-2 ms-1 mb-0">Working hours</h3>
            </div>
            <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
            <ul class="list-unstyled">
              <li>Mon - Fri  8:00 - 18:00</li>
              <li>Sut - Sun  10:00 - 16:00</li>
            </ul>
          </div>
        </div>
      </section>


      <!-- Support / Help center -->
      <section class="container py-5 my-2 my-sm-3 my-lg-4 my-xl-5">
        <div class="d-sm-flex align-items-center justify-content-between py-xxl-3">
          <div class="mb-4 mb-sm-0 me-sm-4">
            <h2 class="h3">Looking for support?</h2>
            <p class="mb-0">We might already have what you're looking for. See our FAQs or head to our dedicated Help Center.</p>
          </div>
          <a class="btn btn-lg btn-outline-dark" href="#!">Help center</a>
        </div>
      </section>


      <!-- Map -->
      <section class="position-relative bg-body-tertiary">
        <a class="position-absolute top-50 start-50 translate-middle z-2 mt-lg-n4" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2" style="width: 50px" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Click to view the map" data-glightbox="width: 100vw; height: 100vh;" data-gallery="map" aria-label="Toggle map">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.5 54.6"><path d="M42.5 19.2C42.5 8.1 33.2-.7 22 0 12.4.7 4.7 8.5 4.2 18c-.2 2.7.3 5.3 1.1 7.7h0s3.4 10.4 17.4 25c.4.4 1 .4 1.4 0 13.6-13.3 17.4-25 17.4-25h0c.6-2 1-4.2 1-6.5z" fill="#ffffff"></path><g fill="#222934"><path d="M20.4 31.8c-4.5 0-8.1-3.6-8.1-8.1s3.6-8.1 8.1-8.1 8.1 3.6 8.1 8.1-3.7 8.1-8.1 8.1zm0-14.2a6.06 6.06 0 0 0-6.1 6.1 6.06 6.06 0 0 0 6.1 6.1c3.3 0 6.1-2.7 6.1-6.1s-2.8-6.1-6.1-6.1z"></path><circle cx="20.4" cy="23.7" r="3"></circle><path d="M20.4 54.5c-.6 0-1.1-.2-1.4-.6C5 39.3 1.5 29 1.4 28.5a21.92 21.92 0 0 1-1.2-8c.6-10.1 8.6-18.3 18.7-19C24.6 1.1 30 3 34.1 6.9c4.1 3.8 6.4 9.2 6.4 14.8 0 2.4-.4 4.7-1.2 6.9-.1.5-4 12-17.6 25.3-.3.4-.8.6-1.3.6zm-17-26.2c.8 2 4.9 11.6 17 24.2 13.2-13 17-24.5 17.1-24.6.7-2 1.1-4.1 1.1-6.3 0-5-2.1-9.9-5.8-13.3-3.7-3.5-8.6-5.2-13.7-4.8-9.1.6-16.4 8-16.9 17.1-.1 2.5.2 5 1.1 7.3l.1.4z"></path></g></svg>
        </a>
        <img src="{{asset('frontend/assets/img/contact/map.jpg')}}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Map">
        <div class="d-none d-xxl-block" style="height: 600px"></div>
        <div class="d-none d-xl-block d-xxl-none" style="height: 500px"></div>
        <div class="d-none d-lg-block d-xl-none" style="height: 420px"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 350px"></div>
        <div class="d-md-none" style="height: 300px"></div>
        <span class="position-absolute top-0 start-0 z-1 w-100 h-100 bg-body opacity-25"></span>
      </section>


      <!-- FAQ accordion -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <h2 class="text-center pt-xxl-3 pb-lg-2 pb-xl-3">Popular questions</h2>
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-9 col-xl-8">

            <!-- Accordion -->
            <div class="accordion accordion-alt-icon" id="faq">

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-1">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false" aria-controls="faqCollapse-1">
                    <span class="me-2">How long will delivery take?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1" data-bs-parent="#faq">
                  <div class="accordion-body">Delivery times vary based on your location and the chosen shipping method. Generally, our standard delivery takes up to 5 days, while our Express Delivery ensures your order reaches you within 1 day. Please note that these times may be subject to occasional variations due to unforeseen circumstances, but we do our best to meet these estimates.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-2">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false" aria-controls="faqCollapse-2">
                    <span class="me-2">What payment methods do you accept?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2" data-bs-parent="#faq">
                  <div class="accordion-body">We offer a range of secure payment options to provide you with flexibility and convenience. Accepted methods include major credit/debit cards, PayPal, and other secure online payment gateways. You can find the complete list of accepted payment methods during the checkout process.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-3">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false" aria-controls="faqCollapse-3">
                    <span class="me-2">Do you ship internationally?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3" data-bs-parent="#faq">
                  <div class="accordion-body">Yes, we proudly offer international shipping to cater to our global customer base. Shipping costs and delivery times will be automatically calculated at the checkout based on your selected destination. Please note that any customs duties or taxes applicable in your country are the responsibility of the customer.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-4">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false" aria-controls="faqCollapse-4">
                    <span class="me-2">Do I need an account to place an order?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4" data-bs-parent="#faq">
                  <div class="accordion-body">While you can place an order as a guest, creating an account comes with added benefits. By having an account, you can easily track your orders, manage your preferences, and enjoy a quicker checkout process for future purchases. It also allows us to provide you with personalized recommendations and exclusive offers.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-5">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false" aria-controls="faqCollapse-5">
                    <span class="me-2">How can I track my order?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5" data-bs-parent="#faq">
                  <div class="accordion-body">Once your order is dispatched, you will receive a confirmation email containing a unique tracking number. You can use this tracking number on our website to monitor the real-time status of your shipment. Additionally, logging into your account will grant you access to a comprehensive order history, including tracking information.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-6">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false" aria-controls="faqCollapse-6">
                    <span class="me-2">What are the product refund conditions?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6" data-bs-parent="#faq">
                  <div class="accordion-body">Our refund policy is designed to ensure customer satisfaction. Details can be found in our [refund policy page](insert link). In essence, we accept returns within [insert number] days of receiving the product, provided it is in its original condition with all tags and packaging intact. Refunds are processed promptly once the returned item is inspected and approved.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-7">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false" aria-controls="faqCollapse-7">
                    <span class="me-2">Do I need to create an account to shop with you?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-7" aria-labelledby="faqHeading-7" data-bs-parent="#faq">
                  <div class="accordion-body">While guest checkout is available for your convenience, creating an account enhances your overall shopping experience. With an account, you can easily track your order status, save multiple shipping addresses, and enjoy a streamlined checkout process. Moreover, account holders receive early access to promotions and exclusive offers. Signing up is quick and hassle-free!</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-8">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false" aria-controls="faqCollapse-8">
                    <span class="me-2">Is there a minimum order value for free shipping?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-8" aria-labelledby="faqHeading-8" data-bs-parent="#faq">
                  <div class="accordion-body">Yes, we offer free shipping on orders exceeding $250. Orders below this threshold are subject to standard shipping fees, which will be displayed during the checkout process.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Instagram feed -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <div class="text-center pt-xxl-3 pb-2 pb-md-3">
          <h2 class="pb-2 mb-1">
            <span class="animate-underline">
              <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
            </span>
          </h2>
          <p>Find more inspiration on our Instagram</p>
        </div>
        <div class="overflow-x-auto pb-3 mb-n3" data-simplebar="">
          <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="{{asset('frontend/assets/img/instagram/01.jpg')}}" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="{{asset('frontend/assets/img/instagram/02.jpg')}}" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="{{asset('frontend/assets/img/instagram/03.jpg')}}" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="{{asset('frontend/assets/img/instagram/04.jpg')}}" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="{{asset('frontend/assets/img/instagram/05.jpg')}}" alt="Instagram image">
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>


    <!-- Page footer -->
    <footer class="footer pt-5 pb-4">
      <div class="container pt-sm-2 pt-md-3 pt-lg-4">
        <div class="row pb-5 mb-lg-3">

          <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
          <div class="col-md-8 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0 mt-n3 mt-sm-0">
            <div class="accordion" id="footerLinks">
              <div class="row row-cols-1 row-cols-sm-3">
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="categoriesHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Categories</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#categoriesLinks" aria-expanded="false" aria-controls="categoriesLinks">Categories</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="categoriesLinks" aria-labelledby="categoriesHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">For women</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">For men</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Home clothes</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Accessories</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Sale</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="accountHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Your account</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping &amp; policies</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Taxes &amp; fees</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="customerHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Payment methods</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Money back guarantee</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Product returns</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Support center</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
              </div>
            </div>
          </div>

          <!-- Subscription -->
          <div class="col-md-4 offset-xl-1">
            <h6 class="mb-4">Join us and stay up to date</h6>
            <form class="needs-validation" novalidate="">
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-woman" checked="">
                <label for="check-woman" class="form-check-label">Woman</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-man">
                <label for="check-man" class="form-check-label">Man</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-sale">
                <label for="check-sale" class="form-check-label">Sale</label>
              </div>
              <div class="position-relative mt-3">
                <input type="email" class="form-control form-control-lg bg-image-none text-start" placeholder="Enter email" aria-label="Your email address" required="">
                <div class="invalid-tooltip bg-transparent p-0">Please enter you email address!</div>
                <button type="submit" class="btn btn-icon btn-ghost fs-xl btn-secondary border-0 position-absolute top-0 end-0 mt-1 me-1" aria-label="Submit your email address">
                  <i class="ci-arrow-up-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Social account links -->
        <div class="d-flex justify-content-center justify-content-lg-start gap-2 mt-n2 mt-md-0">
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>" title="YouTube" aria-label="Follow us on YouTube">
            <i class="ci-youtube"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>" title="Facebook" aria-label="Follow us on Facebook">
            <i class="ci-facebook"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>" title="Instagram" aria-label="Follow us on Instagram">
            <i class="ci-instagram"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>" title="Telegram" aria-label="Follow us on Telegram">
            <i class="ci-telegram"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>" title="Pinterest" aria-label="Follow us on Pinterest">
            <i class="ci-pinterest"></i>
          </a>
        </div>

        <!-- Copyright + Payment methods -->
        <div class="d-lg-flex align-items-center border-top pt-4 mt-3">
          <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
            <div>
              <img src="{{asset('frontend/assets/img/payment-methods/visa-light-mode.svg')}}" class="d-none-dark" alt="Visa">
              <img src="{{asset('frontend/assets/img/payment-methods/visa-dark-mode.svg')}}" class="d-none d-block-dark" alt="Visa">
            </div>
            <div>
              <img src="{{asset('frontend/assets/img/payment-methods/paypal-light-mode.svg')}}" class="d-none-dark" alt="PayPal">
              <img src="{{asset('frontend/assets/img/payment-methods/paypal-dark-mode.svg')}}" class="d-none d-block-dark" alt="PayPal">
            </div>
            <div>
              <img src="{{asset('frontend/assets/img/payment-methods/mastercard.svg')}}" alt="Mastercard">
            </div>
            <div>
              <img src="{{asset('frontend/assets/img/payment-methods/google-pay-light-mode.svg')}}" class="d-none-dark" alt="Google Pay">
              <img src="{{asset('frontend/assets/img/payment-methods/google-pay-dark-mode.svg')}}" class="d-none d-block-dark" alt="Google Pay">
            </div>
            <div>
              <img src="{{asset('frontend/assets/img/payment-methods/apple-pay-light-mode.svg')}}" class="d-none-dark" alt="Apple Pay">
              <img src="{{asset('frontend/assets/img/payment-methods/apple-pay-dark-mode.svg')}}" class="d-none d-block-dark" alt="Apple Pay">
            </div>
          </div>
          <div class="d-md-flex justify-content-center order-lg-1">
            <ul class="nav justify-content-center gap-4 order-md-3 mb-4 mb-md-0">
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Privacy</a>
              </li>
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Affiliates</a>
              </li>
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Terms of use</a>
              </li>
            </ul>
            <div class="vr text-body-secondary opacity-25 mx-4 d-none d-md-inline-block order-md-2"></div>
            <p class="fs-xs text-center text-lg-start mb-0 order-md-1">
              © All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
            </p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
      <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Customize<i class="ci-settings fs-base ms-1 me-n2 animate-target"></i>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/glightbox/glightbox.min.js')}}"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>


</body>
<!-- Mirrored from cartzilla-html.createx.studio/contact-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 15:38:45 GMT -->
</html>
