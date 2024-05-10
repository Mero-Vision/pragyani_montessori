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


    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">

                    @forelse ($blogs as $blog)
                        <div class="vs-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{url('blogs')}}/{{$blog->slug}}"><img
                                        src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{url('blogs')}}/{{$blog->slug}}"><i class="far fa-calendar-alt"></i>
                                        {{ $blog->created_at->format('F j, Y') }}</a>

                                </div>
                                <h3 class="blog-title"><a href="{{url('blogs')}}/{{$blog->slug}}">{{ $blog->title }}</a></h3>
                                <p class="blog-text"><?php
                                $cleanDescription = strip_tags($blog->description);
                                $words = explode(' ', $cleanDescription);
                                $shortDescription = implode(' ', array_slice($words, 0, 20));
                                echo strlen($cleanDescription) > 20 ? $shortDescription . '...' : $cleanDescription;
                                ?></p>
                                <a href="{{url('blogs')}}/{{$blog->slug}}" class="vs-btn style2">Read More</a>
                            </div>
                        </div>

                        {{$blogs->links('pagination::bootstrap-5')}}
                    @empty
                     <h2 class="blog-title text-center">Currently No Blogs Available</h2>
                    @endforelse


                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search   ">
                            <h3 class="widget_title">Search</h3>
                            <form action="{{url('blogs')}}" class="search-form">
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
                                        <a href="{{url('blogs')}}/{{$blog->slug}}"><img src="{{ $blog->getFirstMediaUrl('blog_image', 'crop_blog_image') }}"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{url('blogs')}}/{{$blog->slug}}"><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('F j, Y') }}</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{url('blogs')}}/{{$blog->slug}}">{{ $blog->title }}</a></h4>
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
