<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.header')
@livewireStyles()

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
                            <a href="{{ url('/') }}">Home</a>
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
                            <img src="{{ url('assets/img/c-b-1-1.svg') }}" alt="icon">
                        </div>
                        <h3 class="info-title">Phone No</h3>
                        <p class="info-text">
                            <a href="tel:+4402076897888" class="text-inherit">9810212323</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon">
                            <img src="{{ url('assets/img/c-b-1-2.svg') }}" alt="icon">
                        </div>
                        <h3 class="info-title">Sunday to Friday</h3>
                        <p class="info-text">8.30am – 02.00pm</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon">
                            <img src="{{ url('assets/img/c-b-1-3.svg') }}" alt="icon">
                        </div>
                        <h3 class="info-title">Email Address</h3>
                        <p class="info-text">
                            <a href="mailto:support@pragyanmontessori.com"
                                class="text-inherit">support@pragyanmontessori.com</a>
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
                    <img src="{{ url('assets/img/con-2-1.png') }}" alt="girl" class="w-100">
                </div>
                <div class="col-xl col-xxl-6 align-self-center">
                    <div class="title-area">
                        <span class="sec-subtitle">Have Any questions? so plese</span>
                        <h2 class="sec-title">Feel Free to Contact!</h2>
                    </div>





                    @livewire('contact-form')
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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7852566742445!2d85.26567037530013!3d27.69303127619093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb23ca7e201d07%3A0x9a45272aa2ace0d6!2sPRAGYAN%20MONTESSORI%20%26%20CHILDCARE%20%5BPMC%5D!5e0!3m2!1sen!2snp!4v1713075135163!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>



    @include('layouts.footer')
    @livewireScripts()
</body>

</html>
