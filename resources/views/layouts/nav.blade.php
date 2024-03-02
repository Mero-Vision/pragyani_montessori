<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links style-white">
                        <ul>
                            <li>
                                <a href="registration.html">
                                    <i class="far fa-user-circle"></i>
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" class="searchBoxTggler">
                                    <i class="far fa-search"></i>
                                    Search Keyword
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-auto text-center">
                    <div class="header-links style2 style-white">
                        <ul>
                            <li>
                                <i class="fas fa-envelope"></i>
                                Email: <a href="mailto:user@example.com">user@example.com</a>
                            </li>
                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                Phone: <a href="tel:+4402076897888">+44 (0) 207 689 7888</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrap">
        <div class="sticky-active">
            <div class="container">
                <div class="row gx-3 align-items-center justify-content-between">
                    <div class="col-8 col-sm-auto">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.svg" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-lg-center">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>

                                </li>
                                <li>
                                    <a href="{{url('about')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="match.html">Teachers</a>

                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>

                                </li>
                                <li>
                                    <a href="blog.html">Gallery</a>

                                </li>
                                <li>
                                    <a href="blog.html">Announcements</a>

                                </li>
                                
                                <li>
                                    <a href="{{url('contact-us')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>

                    <div class="col-auto d-none d-xl-block">
                        <a href="{{url('admission')}}" class="vs-btn">Apply For Admission</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
