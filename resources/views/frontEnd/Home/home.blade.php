@extends('frontEnd.layout.front');

@section('fronttitle')
    home
@endsection

@section('frontContent')
    <!-- Page content -->
    <main class="content-wrapper">

        <!-- Hero slider -->
        <section class="position-relative">
            <div class="swiper position-absolute top-0 start-0 w-100 h-100"
                data-swiper="{
        &quot;effect&quot;: &quot;fade&quot;,
        &quot;loop&quot;: true,
        &quot;speed&quot;: 400,
        &quot;pagination&quot;: {
          &quot;el&quot;: &quot;.swiper-pagination&quot;,
          &quot;clickable&quot;: true
        },
        &quot;autoplay&quot;: {
          &quot;delay&quot;: 5500,
          &quot;disableOnInteraction&quot;: false
        }
      }"
                data-bs-theme="dark">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide" style="background-color: #6dafca">
                        <div class="position-absolute d-flex align-items-center w-100 h-100 z-2">
                            <div class="container mt-lg-n4">
                                <div class="row">
                                    <div class="col-9 col-sm-8 col-md-7 col-lg-6">
                                        <p class="fs-sm text-white mb-lg-4">🔥 Free shipping - order over
                                            <strong>50$</strong>
                                        </p>
                                        <h2 class="display-4 pb-2 pb-md-3 pb-lg-4">Healthy Food Available to Everyone</h2>
                                        <a class="btn btn-lg btn-outline-light rounded-pill"
                                            href="shop-catalog-grocery.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/img/home/grocery/hero-slider/01.jpg') }}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" style="background-color: #5a7978">
                        <div class="position-absolute d-flex align-items-center w-100 h-100 z-2">
                            <div class="container mt-lg-n4">
                                <div class="row">
                                    <div class="col-12 col-sm-10 col-md-7 col-lg-6">
                                        <p class="fs-sm text-white mb-lg-4">🥚 Organic products to your table</p>
                                        <h2 class="display-4 pb-2 pb-md-3 pb-lg-4">Organic eggs from home-grown chicken</h2>
                                        <a class="btn btn-lg btn-outline-light rounded-pill"
                                            href="shop-catalog-grocery.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/img/home/grocery/hero-slider/02.jpg') }}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide" style="background-color: #f99c03">
                        <div class="position-absolute d-flex align-items-center w-100 h-100 z-2">
                            <div class="container mt-lg-n4">
                                <div class="row">
                                    <div class="col-9 col-sm-8 col-md-7 col-lg-6">
                                        <p class="fs-sm text-white mb-lg-4">🥝 Only natural ingredients</p>
                                        <h2 class="display-4 pb-2 pb-md-3 pb-lg-4">Enjoy refreshing summer drink</h2>
                                        <a class="btn btn-lg btn-outline-light rounded-pill"
                                            href="shop-catalog-grocery.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/img/home/grocery/hero-slider/03.jpg') }}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                    </div>
                </div>

                <!-- Slider pagination (Bullets) -->
                <div class="swiper-pagination pb-sm-2"></div>
            </div>
            <div class="d-md-none" style="height: 380px"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 420px"></div>
            <div class="d-none d-lg-block d-xl-none" style="height: 500px"></div>
            <div class="d-none d-xl-block d-xxl-none" style="height: 560px"></div>
            <div class="d-none d-xxl-block" style="height: 624px"></div>
        </section>








        <!-- Lifestyle categories that turns into carousel on screen < 992px (lg breackpoint) -->
        <section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
            <h2 class="h3 text-center pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5">Shop by lifestyle</h2>
            <div class="swiper pb-lg-2"
                data-swiper="{
        &quot;slidesPerView&quot;: 1,
        &quot;spaceBetween&quot;: 24,
        &quot;pagination&quot;: {
          &quot;el&quot;: &quot;.swiper-pagination&quot;,
          &quot;clickable&quot;: true
        },
        &quot;breakpoints&quot;: {
          &quot;500&quot;: {
            &quot;slidesPerView&quot;: 2
          },
          &quot;768&quot;: {
            &quot;slidesPerView&quot;: 3
          },
          &quot;992&quot;: {
            &quot;slidesPerView&quot;: 4
          }
        }
      }">
                <div class="swiper-wrapper">

                    <!-- Category -->
                    <div class="swiper-slide text-center">
                        <div
                            class="position-relative d-inline-block text-dark-emphasis bg-warning-subtle rounded-circle p-5 mb-4">
                            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 76 76" fill="none">
                                <path
                                    d="M62.631 13.369l-7.214 7.214M20.583 55.417l-7.214 7.214M38 51.037c0-11.315-13.926-11.315-13.926-11.315s0 13.926 11.315 13.926H38m0-2.611v2.611m0-2.611c0-11.315 13.926-11.315 13.926-11.315s0 13.926-11.315 13.926H38m0-14.222c0-11.315-13.926-11.315-13.926-11.315s0 13.926 11.315 13.926H38m0-2.611v2.611m0-2.611c0-11.315 13.926-11.315 13.926-11.315s0 13.926-11.315 13.926H38m0 18.585v-6.967M72.833 38c0 19.238-15.595 34.833-34.833 34.833S3.167 57.238 3.167 38 18.762 3.167 38 3.167 72.833 18.762 72.833 38zM38 15.378s9.847 9.849 1.846 17.849L38 35.074l-1.846-1.847C28.153 25.227 38 15.378 38 15.378z"
                                    stroke="currentColor" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2">
                            <a class="animate-underline stretched-link" href="shop-catalog-grocery.html">
                                <span class="animate-target">Gluten-Free</span>
                            </a>
                        </h3>
                        <p class="fs-sm mb-0">Foods that don't contain gluten</p>
                    </div>

                    <!-- Category -->
                    <div class="swiper-slide text-center">
                        <div
                            class="position-relative d-inline-block text-dark-emphasis bg-success-subtle rounded-circle p-5 mb-4">
                            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 76 76" fill="none">
                                <g stroke="currentColor" stroke-width="2.5" stroke-miterlimit="10">
                                    <g stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M16.842 37.347c5.205 6.789 12.251 18.802 12.251 36.436h17.812c0-17.634 7.066-29.648 12.251-36.436m-7.599-3.958c-3.048 4.71-6.452 10.984-9.084 18.565V32.142">
                                        </path>
                                        <path d="M33.547 32.162v19.811c-2.632-7.56-6.036-13.834-9.104-18.584"></path>
                                    </g>
                                    <path
                                        d="M62.502 15.577c-.079 0-.139.02-.218.02-1.029-5.086-5.522-8.926-10.905-8.926-1.405 0-2.731.297-3.958.752-1.979-3.127-5.423-5.205-9.401-5.205-3.958 0-7.422 2.098-9.401 5.205-1.227-.475-2.553-.752-3.958-.752-5.403 0-9.896 3.84-10.905 8.926-.079 0-.139-.02-.218-.02-6.155 0-11.281 4.988-11.281 11.143s5.126 11.143 11.281 11.143c3.76 0 7.046-1.88 9.045-4.73.673.158 1.366.277 2.078.277 2.692 0 5.067-1.207 6.709-3.107 1.623 1.88 3.978 3.107 6.65 3.107s5.027-1.227 6.65-3.107c1.643 1.88 4.018 3.107 6.709 3.107.712 0 1.405-.099 2.078-.277 2.019 2.85 5.304 4.73 9.045 4.73 6.155 0 11.281-4.987 11.281-11.143s-5.126-11.143-11.281-11.143z"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2">
                            <a class="animate-underline stretched-link" href="shop-catalog-grocery.html">
                                <span class="animate-target">Vegan</span>
                            </a>
                        </h3>
                        <p class="fs-sm mb-0">Vegetable based goodness</p>
                    </div>

                    <!-- Category -->
                    <div class="swiper-slide text-center">
                        <div
                            class="position-relative d-inline-block text-dark-emphasis bg-info-subtle rounded-circle p-5 mb-4">
                            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 76 76" fill="none">
                                <path d="M9.5 72.8336C9.5 72.8336 9.875 42.7074 38 34.8336" stroke="currentColor"
                                    stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path
                                    d="M11.1264 58.4427C7.13273 49.8272 -11.3834 1.3653 66.3117 6.74996C67.4008 6.74996 68.49 7.82689 68.8531 8.90382C70.6684 18.9552 74.6621 64.1863 13.6678 59.8786C12.2156 59.8786 11.4895 59.5196 11.1264 58.4427Z"
                                    stroke="currentColor" stroke-width="2.5" stroke-miterlimit="10"></path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2">
                            <a class="animate-underline stretched-link" href="shop-catalog-grocery.html">
                                <span class="animate-target">Plant based</span>
                            </a>
                        </h3>
                        <p class="fs-sm mb-0">Based on herbal ingredients</p>
                    </div>

                    <!-- Category -->
                    <div class="swiper-slide text-center">
                        <div
                            class="position-relative d-inline-block text-dark-emphasis bg-danger-subtle rounded-circle p-5 mb-4">
                            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                viewBox="0 0 76 76" fill="none" stroke="currentColor" stroke-width="2.5"
                                stroke-miterlimit="10" stroke-linejoin="round">
                                <path
                                    d="M58.59 33.535c-2.219-3.028-3.595-6.515-4.043-10.133-1.227-9.91-7.437-16.42-6.862-15.718-4.878-5.956-14.1-6.035-19.083-.163-4.128 4.863-6.442 10.345-7.191 16.12-.454 3.502-1.759 6.871-3.919 9.785-3.034 4.093-4.824 9.13-4.824 14.577 0 13.7 11.607 24.962 25.584 24.829 13.876-.132 25.083-11.198 25.083-24.829 0-5.399-1.758-10.395-4.744-14.469z">
                                </path>
                                <path
                                    d="M48.871 48.815c0 5.885-4.867 10.655-10.871 10.655S27.129 54.7 27.129 48.815 31.996 34.495 38 34.495s10.871 8.435 10.871 14.32z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="h5 mb-2">
                            <a class="animate-underline stretched-link" href="shop-catalog-grocery.html">
                                <span class="animate-target">Keto</span>
                            </a>
                        </h3>
                        <p class="fs-sm mb-0">Good fats served in food</p>
                    </div>
                </div>

                <!-- Slider pagination (Bullets) -->
                <div class="swiper-pagination position-static mt-3 mt-sm-4"></div>
            </div>
        </section>






    </main>
@endsection
