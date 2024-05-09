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
                <h1 class="breadcumb-title">Announcements</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Announcements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">

                    @forelse ($announcements as $announcement)
                        <div class="vs-blog blog-single">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <i class="far fa-calendar-alt"></i> {{ $announcement->created_at->format('F j, Y') }}
                                </div>
                                <h2 class="blog-title">{{ $announcement->title }}</h2>
                                <p class="blog-text">{!! $announcement->content !!}</p>

                            </div>
                        </div>
                    @empty
                        <h2 class="blog-title text-center">Currently No Announcements Available</h2>
                    @endforelse





                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">





                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Upcoming Events</h3>
                            <div class="vs-event-widget">
                                @forelse ($announcements as $announcement)
                                    <div class="recent-event">
                                        <a  class="event-date"><span
                                                class="month">{{ $announcement->created_at->format('M') }}</span>{{ $announcement->created_at->format('d') }}</a>
                                        <div class="media-body">
                                            <h4 class="event-title">{{ $announcement->title }}</h4>
                                        </div>
                                    </div>
                                @empty
                                    <p class="blog-title text-center">Currently No Upcoming Announcements Available</p>
                                @endforelse

                            </div>
                        </div>
                        <div class="widget bg-vs-secondary  " data-bg-src="assets/img/bg/widget-bg-1-1.png">
                            <h4 class="mt-n2 text-white">Join together to make amazing things happen</h4>
                            <p class="mb-4 pb-1 text-white">Get all the latest information, support and guidance about
                                the cost of living with kindergarten.</p>
                            <a href="{{ url('admission') }}" class="vs-btn">Apply For Admission</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>



    @include('layouts.footer')
    @livewireScripts()
</body>

</html>
