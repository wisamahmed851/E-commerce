@extends('frontEnd.layout.front');

@section('fronttitle')
    home
@endsection

@section('frontContent')
    <!-- Page content -->
    <main class="content-wrapper">

        <!-- Breadcrumb -->
        <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>


        <!-- Hero -->
        <section class="container">
            <div class="row">

                <!-- Cover image -->
                <div class="col-md-7 order-md-2 mb-4 mb-md-0">
                    <div class="position-relative h-100">
                        <div class="ratio ratio-16x9"></div>
                        <img src="{{asset('frontend/assets/img/about/v1/hero.jpg')}}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
                    </div>
                </div>

                <!-- Text + button -->
                <div class="col-md-5 order-md-1">
                    <div class="position-relative py-5 px-4 px-sm-5">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="position-relative z-1 py-md-2 py-lg-4 py-xl-5 px-xl-2 px-xxl-4 my-xxl-3">
                            <h1 class="pb-1 pb-md-2 pb-lg-3">Cartzilla - More than a retailer</h1>
                            <p class="text-dark-emphasis pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Since 2015, we have been fulfilling
                                the small dreams and big plans of millions of people. You can find literally everything
                                here.</p>
                            <a class="btn btn-lg btn-outline-dark animate-slide-down" href="#mission">
                                Learn more
                                <i class="ci-arrow-down fs-lg animate-target ms-2 me-n1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Stats -->
        <section class="container py-5 mt-md-2 mt-lg-4">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">14k</div>
                    <p class="fs-sm mb-0">products available for purchase</p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">120m</div>
                    <p class="fs-sm mb-0">users visited site from 2015</p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">800+</div>
                    <p class="fs-sm mb-0">employees around the world </p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">92%</div>
                    <p class="fs-sm mb-0">of our customers return</p>
                </div>
            </div>
        </section>


        <!-- CEO quotation (Mission) -->
        <section class="container pt-3 pt-sm-4 pt-lg-5 mt-lg-2 mt-xl-4 mt-xxl-5" id="mission"
            style="scroll-margin-top: 60px">
            <div class="text-center mx-auto" style="max-width: 690px">
                <h2 class="text-body fs-sm fw-normal">Mission</h2>
                <h3 class="h1 pb-2 pb-md-3 mx-auto" style="max-width: 400px">The best products at fair prices</h3>
                <p class="fs-xl pb-2 pb-md-3 pb-lg-4">"We believe that things exist to make life easier, more pleasant and
                    kinder. That's why the search for the right thing should be quick, convenient and enjoyable. We do not
                    just sell household appliances and electronics, but comfort and accessibility."</p>
                <img src="{{asset('frontend/assets/img/about/v1/avatar.jpg')}}" width="64" class="d-block rounded-circle mx-auto mb-3"
                    alt="Avatar">
                <h6 class="mb-0">William Lacker, Cartzilla CEO</h6>
            </div>
        </section>


        <!-- Principles -->
        <section class="container pt-5">
            <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-5">
                <div class="col-md-5 col-lg-6 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                    <div class="ratio ratio-1x1">
                        <img src="{{asset('frontend/assets/img/about/v1/delivery.jpg')}}" class="rounded-5" alt="Image">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 pt-md-3 pt-xl-4 pt-xxl-5">
                    <div class="ps-md-3 ps-lg-4 ps-xl-5 ms-xxl-4">
                        <h2 class="text-body fs-sm fw-normal">Principles</h2>
                        <h3 class="h1 pb-1 pb-sm-2 pb-lg-3">The main principles that will allow us to grow</h3>
                        <p class="pb-xl-3">Cartzilla is a comprehensive solution to fulfill any customer's needs, serving as
                            both the starting point and end destination of their search. It operates as a reliable
                            assistant, dedicated to eliminating the need for any unpleasant compromises, making their dreams
                            a reality, and empowering them to think big.</p>

                        <!-- Accordion -->
                        <div class="accordion accordion-alt-icon" id="principles">

                            <!-- Item (expanded) -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFocus">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#focus" aria-expanded="false"
                                        aria-controls="focus">
                                        <span class="animate-target me-2">Customer focus</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="focus" aria-labelledby="headingFocus"
                                    data-bs-parent="#principles">
                                    <div class="accordion-body">We prioritize understanding and anticipating our customers'
                                        needs, delivering an exceptional and personalized experience from start to finish.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingReputation">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#reputation" aria-expanded="false"
                                        aria-controls="reputation">
                                        <span class="animate-target me-2">Betting on reputation</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="reputation" aria-labelledby="headingReputation"
                                    data-bs-parent="#principles">
                                    <div class="accordion-body">We value a solid reputation built on integrity,
                                        transparency, and quality - ensuring our customers trust and rely on our brand.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFast">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#fast" aria-expanded="false"
                                        aria-controls="fast">
                                        <span class="animate-target me-2">Fast, convenient and enjoyable</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="fast" aria-labelledby="headingFast"
                                    data-bs-parent="#principles">
                                    <div class="accordion-body">We've streamlined our process for speed, convenience, and
                                        an enjoyable shopping experience, redefining online standards for our delighted
                                        customers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Values (Carousel of icon boxes) -->
        <section class="container-start pt-5">
            <div class="row align-items-center g-0 pt-2 pt-sm-3 pt-md-4 pt-lg-5">
                <div class="col-md-4 col-lg-3 pb-1 pb-md-0 pe-3 ps-md-0 mb-4 mb-md-0">
                    <div class="d-flex flex-md-column align-items-end align-items-md-start">
                        <div class="mb-md-5 me-3 me-md-0">
                            <h2 class="text-body fs-sm fw-normal">Values</h2>
                            <h3 class="h1 mb-0">Simple values to achieve goals</h3>
                        </div>

                        <!-- External slider prev/next buttons -->
                        <div class="d-flex gap-2">
                            <button type="button" id="prev-values"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1"
                                aria-label="Prev">
                                <i class="ci-chevron-left fs-xl animate-target"></i>
                            </button>
                            <button type="button" id="next-values"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                                aria-label="Next">
                                <i class="ci-chevron-right fs-xl animate-target"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    <div class="ps-md-4 ps-lg-5">
                        <div class="swiper"
                            data-swiper="{
                  &quot;slidesPerView&quot;: &quot;auto&quot;,
                  &quot;spaceBetween&quot;: 24,
                  &quot;loop&quot;: true,
                  &quot;navigation&quot;: {
                    &quot;prevEl&quot;: &quot;#prev-values&quot;,
                    &quot;nextEl&quot;: &quot;#next-values&quot;
                  }
                }">
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-user-plus fs-4 me-3"></i>
                                                People
                                            </div>
                                            <p class="mb-0">The most important value of the Company is people (employees,
                                                partners, clients). Behind any success there is, first and foremost, a
                                                specific person. It is he who creates the product, technology, and
                                                innovation.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-shopping-bag fs-4 me-3"></i>
                                                Service
                                            </div>
                                            <p class="mb-0">Care, attention, desire and ability to be helpful (to a
                                                colleague in his department, other departments, clients, customers and all
                                                other people who surround us).</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-trending-up fs-4 me-3"></i>
                                                Responsibility
                                            </div>
                                            <p class="mb-0">Responsibility is our key quality. We don't shift it to
                                                external circumstances or other people. If we see something that could be
                                                improved, we don't just criticize, but offer our own options.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-rocket fs-4 me-3"></i>
                                                Innovation
                                            </div>
                                            <p class="mb-0">We foster a culture of continuous improvement and innovation.
                                                Embracing change and staying ahead of the curve are essential for our
                                                success. We encourage creative thinking, experimentation, and the pursuit of
                                                new ideas.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-star fs-4 me-3"></i>
                                                Leadership
                                            </div>
                                            <p class="mb-0">Cartzilla people are young, ambitious and energetic
                                                individuals. With identified leadership qualities, with a desire to be the
                                                best at what they do.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-leaf fs-4 me-3"></i>
                                                Sustainability
                                            </div>
                                            <p class="mb-0">We are committed to minimizing our environmental impact and
                                                promoting sustainable practices. From responsible sourcing to eco-friendly
                                                packaging, we aim to make a positive contribution to the well-being of our
                                                planet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Video + Blog post -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-md-4 mt-lg-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ratio ratio-16x9"></div>
                        <img src="{{asset('frontend/assets/img/about/v1/video-cover.jpg')}}"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5" alt="Image">
                        <div class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
                            <a class="btn btn-lg btn-light rounded-pill m-md-2"
                                href="https://www.youtube.com/watch?v=Sqqj_14wBxU" data-glightbox="">
                                <i class="ci-play fs-lg ms-n1 me-2"></i>
                                Play
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-body-tertiary rounded-5 py-5 px-4 px-sm-5">
                        <div class="py-md-3 py-lg-4 py-xl-5 px-lg-4 px-xl-5 my-lg-2 my-xl-4 my-xxl-5">
                            <h2 class="h3 pb-sm-1 pb-lg-2">The role of philanthropy in building a better world</h2>
                            <p class="pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Charitable contributions are a vital aspect of building
                                a better world. These contributions come in various forms, including monetary donations...
                            </p>
                            <a class="btn btn-lg btn-outline-dark" href="#!">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    
        <!-- Subscription form + Vlog -->
        <section class="bg-body-tertiary py-5">
            <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
                <div class="row">
                    <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                        <h2 class="h4 mb-2">Sign up to our newsletter</h2>
                        <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions
                        </p>
                        <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate="">
                            <div class="position-relative w-100 me-2">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email"
                                    required="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                        </form>
                        <div class="d-flex gap-3">
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                                <i class="ci-instagram fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                                <i class="ci-facebook fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                                <i class="ci-youtube fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                                <i class="ci-telegram fs-base"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                        <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="{{asset('frontend/assets/img/home/electronics/vlog/01.jpg')}}" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5
                                        New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="{{asset('frontend/assets/img/home/electronics/vlog/02.jpg')}}" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5
                                        Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="{{asset('frontend/assets/img/home/electronics/vlog/03.jpg')}}" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top
                                        5 New Amazing Gadgets on Cartzilla You Must See</a>
                                </div>
                            </li>
                        </ul>
                        <div class="nav ps-md-4 ps-lg-0">
                            <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                                <span class="animate-target">View all</span>
                                <i class="ci-chevron-right fs-base ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
