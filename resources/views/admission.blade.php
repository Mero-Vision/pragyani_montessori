<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.header')
@livewireStyles

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
                <h1 class="breadcumb-title">Apply For Admission Inquiry</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top" data-bg-src="{{ url('assets/img/bg-con-1-1.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto col-xxl-6">
                    <div class="img-box6">
                        <div class="img-1 mega-hover">
                            <img src="{{ url('assets/img/school/img-14.jpeg') }}" alt="image"
                                style="max-width: 440px; max-width:330px;">
                        </div>
                        <div class="img-2 mega-hover">
                            <img src="{{ url('assets/img/school/img-15.jpeg') }}" alt="image"
                                style="max-width: 440px; max-width:330px;">
                        </div>
                    </div>
                </div>
                <div class="col-xl col-xxl-6 align-self-center">
                    <h2 class="sec-title mb-3">Apply for Admission Inquiry</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled mb-0">
                                    <li>Assign practice exercises</li>
                                    <li>Track student progress</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Videos and articles</li>
                                    <li>Extra curriculum activities</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @livewire('admission-inquiry-form')

                </div>
            </div>
        </div>
    </section>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center text-lg-start">
                <span class="sec-subtitle">learning by connecting practice</span>
                <h2 class="sec-title">Kindergarten Admission Policies</h2>
            </div>
            <div class="accordion accordion-style1" id="faqVersion2">
                <div class="accordion-item active">
                    <div class="accordion-header" id="headingOne2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">Is there a
                            specific enrollment period for admission?</button>
                    </div>
                    <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2"
                        data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p>We accept admissions throughout the year, subject to availability. However, we recommend
                                applying early to secure a spot for your child, as our programs may fill up quickly.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Do you
                            have any specific admission requirements?</button>
                    </div>
                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                        data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p>While there are no strict admission requirements, we encourage parents to schedule a
                                visit to our center to learn more about our philosophy, programs, and facilities.
                                Additionally, we may request certain documents such as proof of age, immunization
                                records, and emergency contact information as part of the admission process.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingThree2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">What
                            is the teacher-to-child ratio in your classrooms?</button>
                    </div>
                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2"
                        data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p>We maintain low teacher-to-child ratios to ensure personalized attention and quality care
                                for each child. Our qualified educators are dedicated to fostering a supportive learning
                                environment where every child can thrive.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingFour2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">Can
                            parents visit the classrooms before applying for admission?</button>
                    </div>
                    <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2"
                        data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p>Yes, we encourage parents to schedule a tour of our classrooms to observe our programs in
                                action, meet our educators, and ask any questions they may have about our curriculum and
                                approach to early childhood education.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" id="headingFive2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">How
                            can I apply for admission to Pragyani Montessori & Childcare Center?</button>
                    </div>
                    <div id="collapseFive2" class="accordion-collapse collapse" aria-labelledby="headingFive2"
                        data-bs-parent="#faqVersion2">
                        <div class="accordion-body">
                            <p>To apply for admission, please fill out our online application form available on our
                                website or visit our center directly. We will guide you through the
                                application process and answer any questions you may have along the way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('layouts.footer')
    @livewireScripts
</body>

</html>
