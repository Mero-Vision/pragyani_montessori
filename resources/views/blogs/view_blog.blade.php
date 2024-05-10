<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pragyani Montessori & Childcare (PMC) - New Naikap, Kathmandu</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="Hancie Phago">
    <link rel="icon" href="{{ url('assets/img/logo.ico') }}" type="image/x-icon">


    <x-meta title="{{ $blog->title }}" description="{!! implode(' ', array_slice(str_word_count(strip_tags($blog->description), 1), 0, 30)) !!}"
        image="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <meta name="google-site-verification" content="OOmvogs6GdjgRqoOMYlMHt3tqSpMZGp-CZx2qXFdAI4" />
</head>
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
                <h1 class="breadcumb-title">Our Blogs</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Our Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-calendar-alt"></i>
                                    {{ $blog->created_at->format('F j, Y') }}</a>

                            </div>
                            <h2 class="blog-title">{{ $blog->title }}</h2>
                            <p>{!! $blog->description !!}</p>


                        </div>

                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">
                            <div class="col-xl-auto">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&media={{ urlencode($blog->image_url) }}"
                                            target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    {{-- <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>  --}}
                                </ul>
                            </div>
                            <div class="col-xl-auto text-xl-end">

                            </div>
                        </div>





                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search   ">
                            <h3 class="widget_title">Search</h3>
                            <form action="{{ url('blogs') }}" class="search-form">
                                <input type="text" placeholder="Search Here" name="search_keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Latest Blogs</h3>
                            <div class="recent-post-wrap">
                                @forelse ($recentBlogs as $blog)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ url('blogs') }}/{{ $blog->slug }}"><img
                                                    src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="recent-post-meta">
                                                <a href="{{ url('blogs') }}/{{ $blog->slug }}"><i
                                                        class="far fa-calendar-alt"></i>
                                                    {{ $blog->created_at->format('F j, Y') }}</a>
                                            </div>
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ url('blogs') }}/{{ $blog->slug }}">{{ $blog->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @empty
                                    <p class="blog-title text-center">Currently No Blogs Available</p>
                                @endforelse
                            </div>
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
