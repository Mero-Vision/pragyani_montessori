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
                    <h1 class="breadcumb-title">Registration</h1>
                    <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div class="breadcumb-menu-wrap">
                        <ul class="breadcumb-menu">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Registration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="space-top" data-bg-src="{{url('assets/img/bg-con-1-1.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto col-xxl-6">
                        <div class="img-box6">
                            <div class="img-1 mega-hover">
                                <img src="{{url('assets/img/con-1-1.jpg')}}" alt="image">
                            </div>
                            <div class="img-2 mega-hover">
                                <img src="{{url('assets/img/con-1-2.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-xxl-6 align-self-center">
                        <h2 class="sec-title mb-3">Apply for Admission</h2>
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
                                        <li>Join millions of students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="form-style3">
                            <div class="row justify-content-between">
                                <div class="col-md-6 form-group">
                                    <label>
                                        Child's Name <span class="required">(Required)</span>
                                    </label>
                                    <input type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Child's DOB <span class="required">(Required)</span>
                                    </label>
                                    <input type="date">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Parent's Name <span class="required">(Required)</span>
                                    </label>
                                    <input type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Parent's Designation <span class="required">(Required)</span>
                                    </label>
                                    <input type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>
                                        Email <span class="required">(Required)</span>
                                    </label>
                                    <input type="email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Phone No</label>
                                    <input type="number">
                                </div>
                                <div class="col-auto align-self-center form-group">
                                    <input type="checkbox" id="notice" name="notice">
                                    <label for="notice">Notify Your child weekly progress</label>
                                </div>
                                <div class="col-auto form-group">
                                    <button class="vs-btn" type="submit">Apply Now</button>
                                </div>
                            </div>
                        </form>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">Inquire Kindergarten School</button>
                        </div>
                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#faqVersion2">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Schedule a Visit and Submit Application</button>
                        </div>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#faqVersion2">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">Teacher Evaluation Form</button>
                        </div>
                        <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#faqVersion2">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">School Assessments</button>
                        </div>
                        <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#faqVersion2">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">decision to leave streaming</button>
                        </div>
                        <div id="collapseFive2" class="accordion-collapse collapse" aria-labelledby="headingFive2" data-bs-parent="#faqVersion2">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-bottom">
            <div class="container">
                <div class="title-area">
                    <h2 class="text-center mt-n2">Key supporters</h2>
                </div>
                <div class="row vs-carousel gx-10" data-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
                    <div class="col-auto">
                        <div class="brand-style1">
                            <img src="assets/img/brand/b-1-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-style1">
                            <img src="assets/img/brand/b-1-2.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-style1">
                            <img src="assets/img/brand/b-1-3.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-style1">
                            <img src="assets/img/brand/b-1-4.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-style1">
                            <img src="assets/img/brand/b-1-5.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </section>



    @include('layouts.footer')
</body>

</html>
