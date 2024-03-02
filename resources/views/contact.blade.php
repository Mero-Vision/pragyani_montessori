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
                    <h1 class="breadcumb-title">Contact Us</h1>
                    <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div class="breadcumb-menu-wrap">
                        <ul class="breadcumb-menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info-style2">
                            <div class="info-icon">
                                <img src="{{url('assets/img/c-b-1-1.svg')}}" alt="icon">
                            </div>
                            <h3 class="info-title">Phone No</h3>
                            <p class="info-text">
                                <a href="tel:+4402076897888" class="text-inherit">+44 (0) 207 689 7888</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-style2">
                            <div class="info-icon">
                                <img src="{{url('assets/img/c-b-1-2.svg')}}" alt="icon">
                            </div>
                            <h3 class="info-title">Monday to Friday</h3>
                            <p class="info-text">8.30am – 02.00pm</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-style2">
                            <div class="info-icon">
                                <img src="{{url('assets/img/c-b-1-3.svg')}}" alt="icon">
                            </div>
                            <h3 class="info-title">Email Address</h3>
                            <p class="info-text">
                                <a href="mailto:user@domainname.com" class="text-inherit">user@domainname.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-extra-bottom">
            <div class="container">
                <div class="row flex-row-reverse gx-60 justify-content-between">
                    <div class="col-xl-auto">
                        <img src="{{url('assets/img/con-2-1.png')}}" alt="girl" class="w-100">
                    </div>
                    <div class="col-xl col-xxl-6 align-self-center">
                        <div class="title-area">
                            <span class="sec-subtitle">Have Any questions? so plese</span>
                            <h2 class="sec-title">Feel Free to Contact!</h2>
                        </div>
                        <form action="#" class="form-style3 layout2 ajax-contact">
                            <div class="row justify-content-between">
                                <div class="col-md-6 form-group">
                                    <label>
                                        First Name <span class="required">(Required)</span>
                                    </label>
                                    <input name="firstname" id="firstname" type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Last Name <span class="required">(Required)</span>
                                    </label>
                                    <input name="lastname" id="lastname" type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Email Address <span class="required">(Required)</span>
                                    </label>
                                    <input name="email" id="email" type="email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Phone Number <span class="required">(Required)</span>
                                    </label>
                                    <input name="number" id="number" type="number">
                                </div>
                                <div class="col-12 form-group">
                                    <label>
                                        Message <span class="required">(Required)</span>
                                    </label>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message"></textarea>
                                </div>
                                <div class="col-auto form-group">
                                    <button class="vs-btn" type="submit">Send Message</button>
                                </div>
                                <p class="form-messages"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-bottom">
            <div class="container">
                <div class="title-area">
                    <h2 class="mt-n2">How To Find Us</h2>
                </div>
                <div class="map-style1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461913.0572571096!2d8.516164543417332!3d50.24088825844987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd121b354b47fd%3A0x422435029b0c610!2sOffenbach%2C%20Germany!5e0!3m2!1sen!2sbd!4v1693456840610!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>



    @include('layouts.footer')
</body>

</html>
