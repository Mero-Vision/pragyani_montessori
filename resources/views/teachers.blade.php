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
                <h1 class="breadcumb-title">Our Teachers</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Our Teachers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="mt-5 space-extra-bottom">
        <div class="container">

            <h3 class="team-name h2">Founders</h3>
            <div class="row align-items-center">

                <div class="col-sm-6">
                    <div class="team-style1 layout2">
                        <div class="team-img">
                            <a href="#"><img src="{{ url('assets/img/founders/founder1.jpg') }}" alt="team"
                                    style="width: 200px; height:200px"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Sanu Khadka</a>
                            </h3>
                            <p class="team-degi">Founder</p>
                            <a href="tel:+4402076897888" class="team-number">9810212323</a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="team-style1 layout2">
                        <div class="team-img">
                            <a href="#"><img src="{{ url('assets/img/founders/founder2.jpg') }}" alt="team"
                                    style="width: 200px; height:200px"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Sarita Shrestha</a>
                            </h3>
                            <p class="team-degi">Founder</p>
                            <a href="tel:+4402076897888" class="team-number">9860022745</a>

                        </div>
                    </div>
                </div>


            </div>


            <h3 class="team-name h2">Teachers</h3>
            <div class="row align-items-center">

                @forelse ($teachers as $teacher)
                    <div class="col-sm-6">
                        <div class="team-style1 layout2">
                            <div class="team-img">
                                <a href="#"><img src="{{ $teacher->getFirstMediaUrl('cms_teacher') }}"
                                        alt="team" style="width: 200px; height:200px"></a>
                            </div>
                            <div class="team-content">
                                <h3 class="team-name h2"><a href="#" class="text-inherit">{{ $teacher->name }}</a>
                                </h3>
                                <p class="team-degi">{{ $teacher->designation }}</p>
                                <a href="tel:+4402076897888"
                                    class="team-number">{{ $teacher->phone_no ?? 'No Phone Number' }}</a>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>

        </div>
    </section>



    @include('layouts.footer')
    @livewireScripts()
</body>

</html>
