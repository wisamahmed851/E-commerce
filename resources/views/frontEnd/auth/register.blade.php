<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<!-- Mirrored from cartzilla-html.createx.studio/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 15:37:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Account - Sign Up</title>
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


    <!-- Page content -->
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
      <div class="d-lg-flex">

        <!-- Login form + Footer -->
        <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

          <!-- Logo -->
          <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
            <a href="index.html" class="navbar-brand pt-0">
              <span class="d-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"></path><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"></path><use href="#czlogo"></use><use href="#czlogo" x="8.516" y="-2.172"></use></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"></path></defs></svg>
              </span>
              Cartzilla
            </a>
          </header>

          <h1 class="h2 mt-auto">Create an account</h1>
          <div class="nav fs-sm mb-3 mb-lg-4">
            I already have an account
            <a class="nav-link text-decoration-underline p-0 ms-2" href="account-signin.html">Sign in</a>
          </div>
          <div class="nav fs-sm mb-4 d-lg-none">
            <span class="me-2">Uncertain about creating an account?</span>
            <a class="nav-link text-decoration-underline p-0" href="#benefits" data-bs-toggle="offcanvas" aria-controls="benefits">Explore the Benefits</a>
          </div>

          <!-- Form -->
          <form class="needs-validation" novalidate="">
            <div class="position-relative mb-4">
              <label for="register-email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" id="register-email" required="">
              <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
            </div>
            <div class="mb-4">
              <label for="register-password" class="form-label">Password</label>
              <div class="password-toggle">
                <input type="password" class="form-control form-control-lg" id="register-password" minlength="8" placeholder="Minimum 8 characters" required="">
                <div class="invalid-tooltip bg-transparent py-0">Password does not meet the required criteria!</div>
                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                  <input type="checkbox" class="btn-check">
                </label>
              </div>
            </div>
            <div class="d-flex flex-column gap-2 mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-pass">
                <label for="save-pass" class="form-check-label">Save the password</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="privacy" required="">
                <label for="privacy" class="form-check-label">I have read and accept the <a class="text-dark-emphasis" href="#!">Privacy Policy</a></label>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100">
              Create an account
              <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
            </button>
          </form>

          <!-- Divider -->
          <div class="d-flex align-items-center my-4">
            <hr class="w-100 m-0">
            <span class="text-body-emphasis fw-medium text-nowrap mx-4">or continue with</span>
            <hr class="w-100 m-0">
          </div>

          <!-- Social login -->
          <div class="d-flex flex-column flex-sm-row gap-3 pb-4 mb-3 mb-lg-4">
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-google ms-1 me-1"></i>
              Google
            </button>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-facebook ms-1 me-1"></i>
              Facebook
            </button>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-apple ms-1 me-1"></i>
              Apple
            </button>
          </div>

          <!-- Footer -->
          <footer class="mt-auto">
            <div class="nav mb-4">
              <a class="nav-link text-decoration-underline p-0" href="help-topics-v1.html">Need help?</a>
            </div>
            <p class="fs-xs mb-0">
              © All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
            </p>
          </footer>
        </div>


        <!-- Benefits section that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <div class="offcanvas-lg offcanvas-end w-100 py-lg-4 ms-auto" id="benefits" style="max-width: 1034px">
          <div class="offcanvas-header justify-content-end position-relative z-2 p-3">
            <button type="button" class="btn btn-icon btn-outline-dark text-dark border-dark bg-transparent rounded-circle d-none-dark" data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
              <i class="ci-close fs-lg"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-dark text-light border-light bg-transparent rounded-circle d-none d-inline-flex-dark" data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
              <i class="ci-close fs-lg"></i>
            </button>
          </div>
          <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
          </div>
          <div class="offcanvas-body position-relative z-2 d-lg-flex flex-column align-items-center justify-content-center h-100 pt-2 px-3 p-lg-0">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block">
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
            </div>
            <div class="position-relative z-2 w-100 text-center px-md-2 p-lg-5">
              <h2 class="h4 pb-3">Cartzilla account benefits</h2>
              <div class="mx-auto" style="max-width: 790px">
                <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 g-lg-3 g-xl-4">
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-mail position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Subscribe to your favorite products</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-settings position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">View and manage your orders and wishlist</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-gift position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Earn rewards for future purchases</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-percent position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Receive exclusive offers and discounts</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-heart position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Create multiple wishlists</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-pie-chart position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Pay for purchases by installments</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- Customizer toggle -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Customize<i class="ci-settings fs-base ms-1 me-n2 animate-target"></i>
      </a>
    </div>


    <!-- Bootstrap + Theme scripts -->
    <script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>


</body>
<!-- Mirrored from cartzilla-html.createx.studio/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 15:37:21 GMT -->
</html>
