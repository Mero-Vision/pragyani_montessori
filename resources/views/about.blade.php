<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.header')

<body>
    <div class="preloader">

        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    @include('layouts.mobile_nav')

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose">
            <i class="fal fa-times"></i>
        </button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit">
                <i class="fal fa-search"></i>
            </button>
        </form>
    </div>
    @include('layouts.nav')


    <div class="breadcumb-wrapper" data-bg-src="{{ url('assets/img/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between flex-row-reverse">
                <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                    <div class="img-box2">
                        <div class="transform-banner">
                            <img src="{{url('assets/img/school/img-11.jpeg')}}" alt="about" style="width: 618px;">
                        </div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="sec-title me-xxl-5">Your child's best start in life</h2>
                    <p class="sec-text col-xl-10 pe-4 mb-4">We are constantly expanding the range of services offered,
                        taking children of all ages. Our goal is to carefully educate and develop a fun way. We strive
                        to turn the learning process.</p>
                    <div class="row justify-content-center justify-content-lg-start text-start">
                        <div class="col-auto">
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Comprehensive reporting on individual achievement</li>
                                    <li>Educational field trips and school presentations</li>
                                    <li>Individual attention in a small-class setting</li>
                                    <li>Learning program with after-school care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row gx-70">
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="img-box2 style2">
                        <div class="transform-banner">
                           <img src="{{url('assets/img/school/img-14.jpeg')}}" alt="about" style="width: 618px;">
                        </div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center text-center text-lg-start">
                    <h2 class="sec-title pe-xxl-4">For every student, every classroom Real results.</h2>
                    <p class="sec-text mb-4 pb-2 col-xxl-10">We are constantly expanding the range of services offered,
                        taking children of all ages. Our goal is to carefully educate and develop a fun way. We strive
                        to turn the learning process.</p>
                    <p class="sec-subtitle2 mb-1">Sessions: Monday – Friday</p>
                    <div class="row gx-50 justify-content-center justify-content-lg-start">
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Morning:</p>
                                <p class="info-text">9am – 12noon</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Lunch:</p>
                                <p class="info-text">12noon – 1pm</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Afternoon:</p>
                                <p class="info-text">1pm – 3.30pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="space-top space-extra-bottom bg-smoke">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-bubble">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <h2 class="sec-title">Qualified Teachers</h2>
                <p class="sec-text">We are constantly expanding the range of services offered</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/img/team/t-1-1.jpg" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2">
                                <a href="team-details.html" class="text-inherit">Prajwol Khadka</a>
                            </h3>
                            <p class="team-degi">Principal and Manager</p>
                            <a href="tel:+4402076897888" class="team-number">+44 (0) 207 689 7888</a>
                            <div class="vs-social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-style2">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/img/team/t-1-2.jpg" alt="team">
                            </a>
                        </div>
                        <h3 class="team-name">
                            <a class="text-inherit" href="team-details.html">Jessica Levis</a>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="team-style2">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/img/team/t-1-3.jpg" alt="team">
                            </a>
                        </div>
                        <h3 class="team-name">
                            <a class="text-inherit" href="team-details.html">Nomina Leione</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row text-center text-lg-start mt-lg-5 pt-4 align-items-center justify-content-between">
                <div class="col-lg-8 col-xl-9">
                    <div class="title-area mb-xl-0">
                        <span class="sec-subtitle">learning by connecting practice</span>
                        <h2 class="sec-title">Promoting high quality learning of Young Children</h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btns mb-0">
                        <a href="contact.html" class="vs-btn">Start Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sec-subtitle">Kindergarten SCHEDULE</span>
                <h2 class="sec-title">Kindergarten History</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">1994</span>
                        <h3 class="feature-title h5">opened its doors</h3>
                        <p class="feature-text">We are constantly expanding the range of services offered, taking
                            children of all ages. Our goal is to carefully educat.</p>
                        <div class="feature-img">
                            <a href="about.html">
                                <img src="assets/img/feature/fe-2-1.jpg" alt="feature">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2001</span>
                        <h3 class="feature-title h5">High school physics</h3>
                        <p class="feature-text">We are constantly expanding the range of services offered, taking
                            children of all ages. Our goal is to carefully educat.</p>
                        <div class="feature-img">
                            <a href="about.html">
                                <img src="assets/img/feature/fe-2-2.jpg" alt="feature">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2008</span>
                        <h3 class="feature-title h5">Get ready for 6th grade</h3>
                        <p class="feature-text">We are constantly expanding the range of services offered, taking
                            children of all ages. Our goal is to carefully educat.</p>
                        <div class="feature-img">
                            <a href="about.html">
                                <img src="assets/img/feature/fe-2-3.jpg" alt="feature">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2014</span>
                        <h3 class="feature-title h5">Internet safety</h3>
                        <p class="feature-text">We are constantly expanding the range of services offered, taking
                            children of all ages. Our goal is to carefully educat.</p>
                        <div class="feature-img">
                            <a href="about.html">
                                <img src="assets/img/feature/fe-2-4.jpg" alt="feature">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-bubble">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <h2 class="sec-title">Available Clubs</h2>
                <p class="sec-text">We are constantly expanding the range of services offered</p>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-xl-auto order-2 order-xl-1">
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img">
                                <img src="assets/img/feature/fe-1-1.jpg" alt="feature">
                            </div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Early Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Help parents get to work on time</li>
                                    <li>Near the station</li>
                                    <li>Children settled and ready to work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img">
                                <img src="assets/img/feature/fe-1-2.jpg" alt="feature">
                            </div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Lunch Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Help parents get to work on time</li>
                                    <li>Near the station</li>
                                    <li>Children settled and ready to work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto order-1 order-xl-2">
                    <img src="assets/img/about/fe-1-1.png" alt="feature" class="w-100">
                </div>
                <div class="col-md-6 col-xl-auto order-3 order-xl-3">
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img">
                                <img src="assets/img/feature/fe-1-3.jpg" alt="feature">
                            </div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Afternoon Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Help parents get to work on time</li>
                                    <li>Near the station</li>
                                    <li>Children settled and ready to work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img">
                                <img src="assets/img/feature/fe-1-4.jpg" alt="feature">
                            </div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Music Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Help parents get to work on time</li>
                                    <li>Near the station</li>
                                    <li>Children settled and ready to work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon">
                            <img src="{{url('assets/img/icons/coun-1-1.svg')}}" alt="icon">
                        </div>
                        <div class="media-body">
                            <p class="media-label">10+</p>
                            <p class="media-title">Student Classrooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon">
                            <img src="{{url('assets/img/icons/coun-1-2.svg')}}" alt="icon">
                        </div>
                        <div class="media-body">
                            <p class="media-label">14</p>
                            <p class="media-title">Kids Classes</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon">
                            <img src="{{url('assets/img/icons/coun-1-3.svg')}}" alt="icon">
                        </div>
                        <div class="media-body">
                            <p class="media-label">75</p>
                            <p class="media-title">Outdoor Activities</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon">
                            <img src="{{url('assets/img/icons/coun-1-4.svg')}}" alt="icon">
                        </div>
                        <div class="media-body">
                            <p class="media-label">23</p>
                            <p class="media-title">Loving Teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-vs-secondary space-top space-extra-bottom">
        <div class="container">
            <div class="row text-center text-lg-start">
                <div class="col-lg-5 col-xl-6 mb-n4 mb-lg-0">
                    <div class="title-area">
                        <span class="sec-subtitle text-white">Why Choose Us</span>
                        <h2 class="sec-title text-white">Our Core Values</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="title-area">
                        <p class="sec-text text-white">We are constantly expanding the range of services offered,
                            taking care of children of all ages. Our goal is to carefully educate and develop children
                            in a fun way. We strive to turn the learning process into a bright.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mt-4 pt-2">
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{url('assets/img/choose/choose-1-1.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5">
                            <a href="service-details.html" class="text-inherit">Learn And Play</a>
                        </h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{url('assets/img/choose/choose-1-2.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5">
                            <a href="service-details.html" class="text-inherit">Great Teachers</a>
                        </h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{url('assets/img/choose/choose-1-3.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5">
                            <a href="service-details.html" class="text-inherit">Family Environment</a>
                        </h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{url('assets/img/choose/choose-1-4.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5">
                            <a href="service-details.html" class="text-inherit">Excellent Programmes</a>
                        </h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center">
                        <div class="sec-bubble">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                        <h2 class="sec-title">See Our Kindergarten Photo Gallery!</h2>
                        <p class="sec-text">We are constantly expanding the range of services offered</p>
                    </div>
                </div>
            </div>
            <div class="row gx-35 gy-gx filter-active">
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-1.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-1.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1 radius-2">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-2.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-2.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-3.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-3.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-4.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-4.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-5.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-5.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item radius-3">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gal-1-6.jpg" alt="gallery">
                            <a href="assets/img/gallery/gal-1-6.jpg" class="gallery-btn popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}<br><br>
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between text-center text-md-start">
                <div class="col-md-auto">
                    <div class="title-area">
                        <span class="sec-subtitle">Service Reviews</span>
                        <h2 class="sec-title">What Parents Say</h2>
                    </div>
                </div>
                <div class="col-md-auto align-self-end">
                    <div class="sec-btns">
                        <button class="icon-btn" data-slick-prev=".testislide3">
                            <i class="far fa-arrow-left"></i>
                        </button>
                        <button class="icon-btn" data-slick-next=".testislide3">
                            <i class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel testislide3" data-slide-show="2" data-md-slide-show="2">
                <div class="col-lg-6">
                    <div class="testi-style2">
                        <p class="testi-text">We've been impressed by the dedication of the teachers at Pragyan
                            Montessori & Childcare Center. They take the time to understand each child's unique needs
                            and tailor their approach accordingly.
                        </p>
                        <div class="testi-body">
                            <div class="testi-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="testi-name h4">Sita Kattel</h3>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-style2">
                        <p class="testi-text">प्रज्ञान मोन्टेसोरी र बालशिक्षा केन्द्र भ्रमण गर्नुअघि हामीले यसलाई सही
                            मिल्याउने भन्ने ठानेको थियो। सूचना अभिभावकहरूसँग अत्यन्त राम्रो छ, र हामी धेरै प्रसन्न छौं
                            हाम्रो चयनमा।</p>
                        <div class="testi-body">
                            <div class="testi-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="testi-name h4">Pritam Khadka</h3>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-style2">
                        <p class="testi-text">Pragyan Montessori & Childcare Center has been a blessing for our family.
                            Our child has flourished under their care and guidance. The teachers are nurturing and
                            skilled in the Montessori method. Highly recommended!</p>
                        <div class="testi-body">
                            <div class="testi-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="testi-name h4">Maya Thapa</h3>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('layouts.footer')
</body>

</html>
