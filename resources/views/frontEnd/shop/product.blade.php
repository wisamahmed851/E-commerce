@extends('frontEnd.layout.front');

@section('fronttitle')
    home
@endsection

@section('frontContent')

 <!-- Page content -->
 <main class="content-wrapper">

    <!-- Breadcrumb -->
    <nav class="container position-relative z-2 pt-lg-2 mt-3 mt-lg-4" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="home-grocery.html">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-grocery.html">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product page</li>
      </ol>
    </nav>

    <!-- Product gallery + Product details -->
    <section class="container pt-md-4 pb-5 mt-md-2 mt-lg-3 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
      <div class="row align-items-start">

        <!-- Product gallery -->
        <div class="col-md-6 col-lg-7 sticky-md-top z-1 mb-4 mb-md-0" style="margin-top: -120px">
          <div class="d-flex" style="padding-top: 120px">

            <!-- Thumbnails -->
            <div class="swiper swiper-load swiper-thumbs d-none d-lg-block w-100 me-xl-3" id="thumbs" data-swiper="{
              &quot;direction&quot;: &quot;vertical&quot;,
              &quot;spaceBetween&quot;: 12,
              &quot;slidesPerView&quot;: 4,
              &quot;watchSlidesProgress&quot;: true
            }" style="max-width: 96px; height: 420px;">
              <div class="swiper-wrapper flex-column">
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/th01.png')}}" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/th02.png')}}" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/th03.png')}}" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
              </div>
            </div>

            <!-- Preview (Large image) -->
            <div class="swiper w-100" data-swiper="{
              &quot;loop&quot;: false,
              &quot;thumbs&quot;: {
                &quot;swiper&quot;: &quot;#thumbs&quot;
              },
              &quot;pagination&quot;: {
                &quot;el&quot;: &quot;.swiper-pagination&quot;,
                &quot;clickable&quot;: true
              }
            }">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a class="ratio ratio-1x1 d-block cursor-zoom-in" href="assets/img/shop/grocery/product/01.png')}}" data-glightbox="" data-gallery="product-gallery">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/01.png')}}" alt="Preview">
                  </a>
                </div>
                <div class="swiper-slide">
                  <a class="ratio ratio-1x1 d-block cursor-zoom-in" href="assets/img/shop/grocery/product/02.png')}}" data-glightbox="" data-gallery="product-gallery">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/02.png')}}" alt="Preview">
                  </a>
                </div>
                <div class="swiper-slide">
                  <a class="ratio ratio-1x1 d-block cursor-zoom-in" href="assets/img/shop/grocery/product/03.png')}}" data-glightbox="" data-gallery="product-gallery">
                    <img src="{{asset('frontend/assets/img/shop/grocery/product/03.png')}}" alt="Preview">
                  </a>
                </div>
              </div>

              <!-- Slider pagination (Bullets) visible on screens > 991px wide (lg breakpoint) -->
              <div class="swiper-pagination mb-n3 d-lg-none"></div>
            </div>
          </div>
        </div>


        <!-- Product details -->
        <div class="col-md-6 col-lg-5 position-relative">
          <div class="ps-xxl-3">
            <p class="fs-sm text-body-secondary">Cereals / Nestlé</p>
            <h1 class="h5 mb-2">Muesli Fitness Nutritious Energy, gluten free</h1>
            <div class="fs-sm fw-medium">500g</div>
            <div class="border rounded-pill px-4 py-2 my-4">
              <div class="text-dark-emphasis fs-sm py-1">
                We will deliver your goods as soon as possible
                <a class="text-dark-emphasis fw-medium ms-1" href="#!">Check availability</a>
              </div>
            </div>
            <div class="h3">$2.15</div>
            <div class="d-flex gap-3 mb-4">
              <div class="count-input flex-shrink-0 rounded-pill">
                <button type="button" class="btn btn-icon btn-lg" data-decrement="" aria-label="Decrement quantity" disabled="">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-lg" value="1" min="1" readonly="">
                <button type="button" class="btn btn-icon btn-lg" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn btn-lg btn-primary rounded-pill w-100">Add to cart</button>
            </div>
            <p class="fs-sm mb-4">Muesli Fitness Nutritious Energy is a popular breakfast cereal that is a healthy and nutritious way to start your day. This delicious cereal is made up of a combination of whole grains, nuts, seeds, and dried fruits.</p>
            <div class="d-flex flex-wrap gap-3 gap-xxl-4 fs-sm text-dark-emphasis mb-2">
              <div class="d-flex align-items-center me-3">
                <i class="ci-gluten-free fs-xl text-body-emphasis me-2"></i>
                Gluten-free
              </div>
              <div class="d-flex align-items-center me-3">
                <i class="ci-broccoli fs-xl text-body-emphasis me-2"></i>
                Plant based
              </div>
              <div class="d-flex align-items-center me-3">
                <i class="ci-leaf fs-xl text-body-emphasis me-2"></i>
                Vegan
              </div>
              <div class="d-flex align-items-center">
                <i class="ci-avocado fs-xl text-body-emphasis me-2"></i>
                Keto
              </div>
            </div>

            

            <div class="d-flex align-items-center position-relative text-dark-emphasis">
              <i class="ci-edit fs-lg me-2"></i>
              <a class="stretched-link fs-sm text-dark-emphasis" href="#!">Report incorrect product information</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Bought together carousel -->
    <section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
      <div class="d-flex align-items-center justify-content-between border-bottom pb-3 pb-md-4 mb-3 mb-md-4">
        <h2 class="h3 mb-0">Often bought with</h2>

        <!-- Slider prev/next buttons -->
        <div class="d-flex gap-2 ms-3">
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="prevBtn" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="nextBtn" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>

      <!-- Slider -->
      <div class="swiper" data-swiper="{
        &quot;slidesPerView&quot;: 2,
        &quot;spaceBetween&quot;: 24,
        &quot;loop&quot;: true,
        &quot;navigation&quot;: {
          &quot;prevEl&quot;: &quot;#prevBtn&quot;,
          &quot;nextEl&quot;: &quot;#nextBtn&quot;
        },
        &quot;breakpoints&quot;: {
          &quot;500&quot;: {
            &quot;slidesPerView&quot;: 3
          },
          &quot;768&quot;: {
            &quot;slidesPerView&quot;: 4
          },
          &quot;1100&quot;: {
            &quot;slidesPerView&quot;: 5
          }
        }
      }">
        <div class="swiper-wrapper">

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-1 mt-sm-2 ms-1 ms-sm-2">-30%</span>
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/02.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$3.12 <del class="fs-sm fw-normal text-body-tertiary ms-1">$4.05</del></div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Fresh orange Klementina, Spain</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/03.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$0.80</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pepsi soda classic, can</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">330ml</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/04.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$2.99</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Mozzarella mini cheese Granaloro</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">250g</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/05.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$1.24</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Coconut, Indonesia</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1 coconut</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/06.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$3.95</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pesto sauce Barilla with parmesan and basil</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">200g</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/09.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$18.60</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Pure virgin olive oil Basso</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1000ml</div>
            </div>
          </div>

          <!-- Product -->
          <div class="swiper-slide h-auto">
            <div class="card product-card h-100 bg-transparent border-0 shadow-none">
              <div class="position-relative z-2">
                <button type="button" class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="{{asset('frontend/assets/img/shop/grocery/16.png')}}" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement="" aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0" min="0" readonly="">
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto" data-increment="" aria-label="Increment quantity">
                        <span data-count-input-value=""></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$2.65</div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="shop-product-grocery.html">Reggia penne rigate No.34 pasta, pack</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">500g</div>
            </div>
          </div>
        </div>
      </div>
    </section>






  </main>

@endsection
