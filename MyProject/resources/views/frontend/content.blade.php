@extends('frontend.app')

@section('abccontent')

<div class="ritekhana-main-content">

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-services-view1-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!--// Services //-->
                    <div class="ritekhana-services ritekhana-services-view1">
                        <ul class="row">
                            <li class="col-md-3">
                                <i class="fab fa-searchengin ritekhana-color"></i>
                                <h2><a href="#">Search Resturant</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-hamburger ritekhana-color"></i>
                                <h2><a href="#">Choose Menu</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="far fa-money-bill-alt ritekhana-color"></i>
                                <h2><a href="#">Payment</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-truck-moving ritekhana-color"></i>
                                <h2><a href="#">Enjoye Delivery</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                        </ul>
                    </div>
                    <!--// Services //-->
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Popular Resturant</h2>
                        <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
                    </div>
                    <!--// Fancy Title //-->
                    
                    <!--// Popular Resturant //-->
                    <div class="ritekhana-resturant ritekhana-resturant-view1">
                        <ul class="row">
                            <li class="col-md-6">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <figure><a href="#"><img src="{{ asset('frontend/extra-images/resturant-view1-image1.jpg') }}" alt=""></a> <span class="ritekhana-bgcolor">Popular</span> </figure>
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">McDonalds</a> <span class="ritekhana-color">Delivery Time 30 Min</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Beverage, </a>
                                            <a href="#">Burgers, </a>
                                            <a href="#">Fast Food, </a>
                                            <a href="#">Wraps</a>
                                        </div>
                                        <p>Sed consequat sapien faus quam bibendum convallis quis in nulla Pellentesque.</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i> 105 Soi Sathon 2</span>
                                        <a href="#" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">Order Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-6">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <figure><a href="#"><img src="{{ asset('frontend/extra-images/resturant-view1-image2.jpg') }}" alt=""></a></figure>
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">Vell Kitchen</a> <span class="ritekhana-color">Delivery Time 15 Min</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Beverage, </a>
                                            <a href="#">Burgers, </a>
                                            <a href="#">Fast Food, </a>
                                            <a href="#">Wraps</a>
                                        </div>
                                        <p>Sed consequat sapien faus quam bibendum convallis quis in nulla Pellentesque.</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i> 105 Soi Sathon 2</span>
                                        <a href="#" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">Order Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-6">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <figure><a href="#"><img src="{{ asset('frontend/extra-images/resturant-view1-image3.jpg') }}" alt=""></a></figure>
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">Hen Kitchen</a> <span class="ritekhana-color">Delivery Time 20 Min</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Beverage, </a>
                                            <a href="#">Burgers, </a>
                                            <a href="#">Fast Food, </a>
                                            <a href="#">Wraps</a>
                                        </div>
                                        <p>Sed consequat sapien faus quam bibendum convallis quis in nulla Pellentesque.</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i> 105 Soi Sathon 2</span>
                                        <a href="#" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">Order Now</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-6">
                                <div class="ritekhana-resturant-view1-wrap">
                                    <figure><a href="#"><img src="{{ asset('frontend/extra-images/resturant-view1-image4.jpg') }}" alt=""></a> <span class="ritekhana-bgcolor">Popular</span> </figure>
                                    <div class="ritekhana-resturant-view1-text">
                                        <h2><a href="#">Way Kitchen</a> <span class="ritekhana-color">Delivery Time 10 Min</span></h2>
                                        <div class="ritekhana-resturant-view1-tags">
                                            <a href="#">Beverage, </a>
                                            <a href="#">Burgers, </a>
                                            <a href="#">Fast Food, </a>
                                            <a href="#">Wraps</a>
                                        </div>
                                        <p>Sed consequat sapien faus quam bibendum convallis quis in nulla Pellentesque.</p>
                                        <span class="ritekhana-resturant-view1-loc"><i class="fa fa-map-marker-alt ritekhana-color"></i> 105 Soi Sathon 2</span>
                                        <a href="#" class="ritekhana-resturant-view1-btn ritekhana-bgcolor">Order Now</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--// Popular Resturant //-->

                    <div class="ritekhana-resturant-viewall"><a href="#" class="ritekhana-bgcolor">View All Resturant</a></div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-browse-dishes-links-full">
        <span class="ritekhana-white-transparent"></span>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title white-color">
                        <h2 class="ritekhana-color">Browse By Dishes</h2>
                        <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
                    </div>
                    <!--// Fancy Title //-->
                    
                    <!--// Browse By Dishes //-->
                    <div class="ritekhana-browse-dishes-links">
                        <ul>
                            <li><a href="#">Arabian</a></li>
                            <li><a href="#">Delhi</a></li>
                            <li><a href="#">Indian</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Thai</a></li>
                            <li><a href="#">Diner</a></li>
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Tandori</a></li>
                            <li><a href="#">Mughlai</a></li>
                            <li><a href="#">Korean</a></li>
                            <li><a href="#">Arabian</a></li>
                            <li><a href="#">Traditional Indian</a></li>
                            <li><a href="#">Chinese</a></li>
                            <li><a href="#">Pizza(9)</a></li>
                            <li><a href="#">Vegetarian</a></li>
                            <li><a href="#">Barbeque</a></li>
                            <li><a href="#">Sandwiches</a></li>
                            <li><a href="#">Burgers</a></li>
                            <li><a href="#">Mughlai</a></li>
                            <li><a href="#">Korean</a></li>
                            <li><a href="#">Arabian</a></li>
                            <li><a href="#">Delhi</a></li>
                            <li><a href="#">Indian</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Thai</a></li>
                            <li><a href="#">Diner</a></li>
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Tandori</a></li>
                            <li><a href="#">Mughlai</a></li>
                            <li><a href="#">Korean</a></li>
                            <li><a href="#">Burgers</a></li>
                            <li><a href="#">Mughlai</a></li>
                        </ul>
                    </div>
                    <!--// Browse By Dishes //-->

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-parallax-view1-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Parallax //-->
                    <div class="ritekhana-parallax-view1">
                        <div class="ritekhana-parallax-view1-left">
                            <h2>Are You a Resturant Owner</h2>
                            <p>Join The thousnad of other Resturants who benefit from having their menus on gofood</p>
                        </div>
                        <a href="#" class="ritekhana-parallax-view1-btn ritekhana-bgcolor">Get Signup</a>
                    </div>
                    <!--// Parallax //-->

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Explore Hot location</h2>
                        <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
                    </div>
                    <!--// Fancy Title //-->

                    <!--// Resturant Gallery //-->
                    <div class="ritekhana-resturant-gallery ritekhana-resturant-gallery-view1">
                        <ul class="row">
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-1.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Denmark</a></h2>
                                        <span>20 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-2.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Chicago</a></h2>
                                        <span>30 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-3.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Denver</a></h2>
                                        <span>10 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-6.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">Los Vegas</a></h2>
                                        <span>25 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-5.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">San Diego</a></h2>
                                        <span>30 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-6">
                                <figure>
                                    <a href="#"><img src="{{ asset('frontend/extra-images/ritekhana-resturant-gallery-view1-4.jpg') }}" alt=""></a>
                                    <figcaption>
                                        <h2><a href="#">New York</a></h2>
                                        <span>40 Listings</span>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <!--// Resturant Gallery //-->

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-testimonial-view1-full">
        <span class="ritekhana-transparent-white"></span>
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title white-color">
                        <h2 class="ritekhana-color">Testimonials Here</h2>
                        <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
                    </div>
                    <!--// Fancy Title //-->
                    
                    <!--// Testimonial //-->
                    <div class="ritekhana-testimonial-view1">
                        <div class="ritekhana-testimonial-view1-layer">
                            <div class="ritekhana-testimonial-view1-inner">
                                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. One morning,...</p>
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/testimonial-thumb-1.jpg') }}" alt="">
                                    <figcaption>
                                        <h2>Williams Son</h2>
                                        <span>New York City</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="ritekhana-testimonial-view1-layer">
                            <div class="ritekhana-testimonial-view1-inner">
                                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. One morning,...</p>
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/testimonial-thumb-2.jpg') }}" alt="">
                                    <figcaption>
                                        <h2>Williams Son</h2>
                                        <span>New York City</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="ritekhana-testimonial-view1-layer">
                            <div class="ritekhana-testimonial-view1-inner">
                                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. One morning,...</p>
                                <figure>
                                    <img src="{{ asset('frontend/extra-images/testimonial-thumb-3.jpg') }}" alt="">
                                    <figcaption>
                                        <h2>Williams Son</h2>
                                        <span>New York City</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!--// Testimonial //-->

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section">
        <div class="container">
            <div class="row">

                <div class="col-md-5 ritekhana-text-app">
                    <small class="ritekhana-color">Download the Resturant app now</small>
                    <h2>Highgen Food in Your Pockit</h2>
                    <p>Not at all like other occupation locales that abandon you out of the loop, Job Time alarms you the moment your application is seen.</p>
                    <a href="#"><img src="{{ asset('frontend/extra-images/appthumb-1.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/extra-images/appthumb-2.png') }}" alt=""></a>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('frontend/extra-images/text-thumb-1.png') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

    <!--// Main Section //-->
    <div class="ritekhana-main-section ritekhana-partner-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    
                    <!--// Fancy Title //-->
                    <div class="ritekhana-fancy-title">
                        <h2 class="ritekhana-color">Our Partners</h2>
                        <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
                    </div>
                    <!--// Fancy Title //-->
                    <div class="ritekhana-partner">
                        <ul>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="404.html"><img src="{{ asset('frontend/extra-images/partner-img-1.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--// Main Section //-->

</div>
@endsection
