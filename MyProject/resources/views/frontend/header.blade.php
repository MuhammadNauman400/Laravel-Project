<header id="ritekhana-header" class="ritekhana-header-one">

    <div class="col-md-12">
        {{-- <a href="index.html" class="ritekhana-logo"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a> --}}
        <div class="ritekhana-navigation">
            <span class="ritekhana-menu-link">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </span>
            <nav id="main-nav">
                <ul id="main-menu" class="sm sm-blue">
                    <li class="active"><a href="index.html">Home</a></li>
                    {{-- <li><a href="#">Restaurants</a>
                        <ul>
                            <li><a href="listing-grid.html">Listing Grid</a></li>
                            <li><a href="listing-list.html">Listing List (View)</a></li>
                            <li><a href="listing-detail.html">Listing Detail</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#">Blogs</a>
                        <ul>
                            <li><a href="blog-large.html">Blog Large</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="megamenu-wrap"><a href="#">Dashboard</a>
                        <ul class="ritekhana-megamenu">
                            <li class="row">
                                <div class="col-md-2">
                                    <h4>Link 1</h4>
                                    <div class="ritekhana-megalist">
                                        <div class="list"><a href="dashboard-profile.html">Dashboard Profile</a></div>
                                        <div class="list"><a href="dashboard-earnings.html">Dashboard Earnings</a>
                                        </div>
                                        <div class="list"><a href="change-password.html">Dashboard Change Password</a>
                                        </div>
                                        <div class="list"><a href="reservations.html">Reservations</a></div>
                                        <div class="list"><a href="priceplan.html">Price Plan</a></div>
                                        <div class="list"><a href="signup.html">Signup/Login</a></div>
                                        <div class="list"><a href="gallery-masonry.html">Gallery Masonry</a></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <h4>Link 2</h4>
                                    <div class="ritekhana-megalist">
                                        <div class="list"><a href="dashboard-reviews.html">Dashboard Reviews</a></div>
                                        <div class="list"><a href="recent-booking.html">Dashboard Recent Booking</a>
                                        </div>
                                        <div class="list"><a href="my-restaurant.html">Dashboard My Restaurant</a>
                                        </div>
                                        <div class="list"><a href="404.html">404 Page</a></div>
                                        <div class="list"><a href="gallery-simple.html">Gallery Simple</a></div>
                                        <div class="list"><a href="gallery-simple-4col.html">Gallery Simple
                                                4column</a></div>
                                        <div class="list"><a href="search-result.html">Search Result</a></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <h4>Link 3</h4>
                                    <div class="ritekhana-megalist">
                                        <div class="list"><a href="dashboard-withdrawal.html">Dashboard Withdrawal</a>
                                        </div>
                                        <div class="list"><a href="my-orders.html">Dashboard My Orders</a></div>
                                        <div class="list"><a href="dashboard-packages.html">Dashboard Packages</a>
                                        </div>
                                        <div class="list"><a href="listing-list.html">Listing List</a></div>
                                        <div class="list"><a href="listing-grid.html">Listing Grid</a></div>
                                        <div class="list"><a href="listing-detail.html">Listing Detail</a></div>
                                        <div class="list"><a href="contact-us.html">Contact Us</a></div>

                                    </div>
                                </div>
                                <div class="col-md-6 ritekhana-megamenu-thumb">
                                    <img src="{{ asset('frontend/extra-images/megamenu-frame.jpg') }}" alt="">
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="reservations.html">Reservations</a></li>
                            <li><a href="priceplan.html">Price Plan</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="signup.html">Signup/Login</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        
       <div class="logout-section">
            <a href="{{route('frontend.news')}}" class="ritekhana-header-btn">News</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="ritekhana-header-btn" type="submit">Logout</button>
            </form>
        </div>
    </div>

</header>
