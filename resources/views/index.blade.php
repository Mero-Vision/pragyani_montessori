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
        <section class="vs-hero-wrapper">
            <div class="vs-hero-carousel" data-height="770" data-container="1900" data-slidertype="responsive" data-navbuttons="true">
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                    <img width="1920" height="770" src="{{url('assets/img/hero-1-1.jpg')}}" class="ls-bg" alt="bg" decoding="async">
                    <ls-layer style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:255px; height:255px; border-width:60px 60px 60px 60px; border-color:#FFD600; border-radius:50% 50% 50% 50%; top:126px; left:740px; z-index:4; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;"></ls-layer>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:711px; height:410px; left:312px; top:213px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1200px; height:600px; left:350px; top:76px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1300px; height:700px; left:50%; top:33px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="static:forever;"></div>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">We Prepare Your</h1>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">Child For Life</h1>
                    <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">We Prepare Your</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Child For Life</h1>
                    <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">We Prepare Your</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Child For Life</h1>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                </div>
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                    <img width="1920" height="770" src="{{url('assets/img/hero-1-2.jpg')}}" class="ls-bg" alt="bg" decoding="async">
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Special Child Session</h1>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">For Brain Growth</h1>
                    <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Special Child Session</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">For Brain Growth</h1>
                    <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Special Child Session</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">For Brain Growth</h1>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                </div>
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                    <img width="1920" height="770" src="{{url('assets/img/hero-1-2.jpg')}}" class="ls-bg" alt="bg" decoding="async">
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Best Children Study</h1>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">And Furture Care</h1>
                    <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Best Children Study</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">And Furture Care</h1>
                    <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                    <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">Best Children Study</h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">And Furture Care</h1>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="contact.html" class="vs-btn">Apply Today</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row gx-70 align-items-center">
                    <div class="col-lg-6">
                        <div class="img-box1">
                            <div class="vs-circle"></div>
                            <div class="img-1 mega-hover">
                                <img src="{{url('assets/img/ab-1-1.jpg')}}" alt="about">
                            </div>
                            <div class="img-2 mega-hover">
                                <img src="{{url('assets/img/ab-1-2.jpg')}}" alt="about">
                            </div>
                            <div class="img-3 mega-hover">
                                <img src="{{url('assets/img/ab-1-3.jpg')}}" alt="about">
                            </div>
                            <div class="img-4 mega-hover">
                                <img src="{{url('assets/img/ab-1-4.jpg')}}" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <span class="sec-subtitle">part of the family since 2001,</span>
                        <h2 class="sec-title">Your Child Will Take The Lead Learning</h2>
                        <p class="sec-text pe-xl-5 mb-4 pb-xl-3">We are constantly expanding the range of services offered, taking care of children of all ages. Our goal is to carefully educate and develop children in a fun way. We strive to turn the learning process into a bright event so that children study with pleasure.</p>
                        <div class="row gx-70 justify-content-center justify-content-lg-start text-md-start">
                            <div class="col-auto">
                                <div class="vs-media media-style1">
                                    <div class="media-icon">
                                        <img src="{{url('assets/img/ab-1-1.svg')}}" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-label">75</p>
                                        <p class="media-title">Outdoor Activities</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="vs-media media-style1">
                                    <div class="media-icon">
                                        <img src="{{url('assets/img/ab-1-2.svg')}}" alt="icon">
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
            </div>
        </section>
        <section class="space-extra-bottom">
            <div class="container">
                <div class="title-area text-center">
                    <div class="sec-bubble">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                    </div>
                    <h2 class="sec-title">Enrol Your Child In A Session Now!</h2>
                    <p class="sec-text">Pre-school has an ‘open door policy’ and also offer a free trial session to all children.</p>
                </div>
                <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2">
                    <div class="service-style1 col-xl-3">
                        <div class="service-body">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="{{url('assets/img/sr-1-1.jpg')}}" alt="service">
                                </a>
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <img src="{{url('assets/img/sr-1-1.svg')}}" alt="icon">
                                </div>
                                <h3 class="service-title">
                                    <a href="service-details.html">Active Learning</a>
                                </h3>
                                <p class="service-text">We have a very large indoor space allowing us to have designated areas for different types</p>
                                <div class="service-bottom">
                                    <a href="service-details.html" class="service-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-style1 col-xl-3">
                        <div class="service-body">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="{{url('assets/img/sr-1-2.jpg')}}" alt="service">
                                </a>
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <img src="{{url('assets/img/sr-1-2.svg')}}" alt="icon">
                                </div>
                                <h3 class="service-title">
                                    <a href="service-details.html">Child Care</a>
                                </h3>
                                <p class="service-text">We have a very large indoor space allowing us to have designated areas for different types</p>
                                <div class="service-bottom">
                                    <a href="service-details.html" class="service-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-style1 col-xl-3">
                        <div class="service-body">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="{{url('assets/img/sr-1-3.jpg')}}" alt="service">
                                </a>
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <img src="{{url('assets/img/sr-1-3.svg')}}" alt="icon">
                                </div>
                                <h3 class="service-title">
                                    <a href="service-details.html">Healthy Meals</a>
                                </h3>
                                <p class="service-text">We have a very large indoor space allowing us to have designated areas for different types</p>
                                <div class="service-bottom">
                                    <a href="service-details.html" class="service-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-style1 col-xl-3">
                        <div class="service-body">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="{{url('assets/img/sr-1-4.jpg')}}" alt="service">
                                </a>
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <img src="{{url('assets/img/sr-1-4.svg')}}" alt="icon">
                                </div>
                                <h3 class="service-title">
                                    <a href="service-details.html">Secure Environment</a>
                                </h3>
                                <p class="service-text">We have a very large indoor space allowing us to have designated areas for different types</p>
                                <div class="service-bottom">
                                    <a href="service-details.html" class="service-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-bg-src="assets/img/bg/bg-h-1-1.jpg">
            <section class="space-top space-extra-bottom">
                <div class="container">
                    <div class="row align-items-center justify-content-between flex-row-reverse">
                        <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                            <div class="img-box2">
                                <div class="transform-banner">
                                    <img src="{{url('assets/img/ab-2-1.jpg')}}" alt="about">
                                </div>
                                <div class="vs-circle jump"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <h2 class="sec-title me-xxl-5">Your child's best start in life</h2>
                            <p class="sec-text col-xl-10 pe-4 mb-4">We are constantly expanding the range of services offered, taking children of all ages. Our goal is to carefully educate and develop a fun way. We strive to turn the learning process.</p>
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
            {{-- <section class="space-extra-bottom">
                <div class="container">
                    <div class="row justify-content-between text-center text-md-start">
                        <div class="col-md-auto">
                            <div class="title-area">
                                <span class="sec-subtitle">choose your own grade level</span>
                                <h2 class="sec-title">Smarty Programs</h2>
                            </div>
                        </div>
                        <div class="col-md-auto align-self-end">
                            <div class="sec-btns">
                                <button class="icon-btn" data-slick-prev=".catslider1">
                                    <i class="far fa-arrow-left"></i>
                                </button>
                                <button class="icon-btn" data-slick-next=".catslider1">
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row vs-carousel gx-15 catslider1" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">k</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">PRE-K</a>
                                </h3>
                                <p class="category-label">( 1.5 - 3 Years )</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">1</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">Grade 1</a>
                                </h3>
                                <p class="category-label">( 4 - 5 Years )</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">2</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">Grade 2</a>
                                </h3>
                                <p class="category-label">( 6 - 8 Years )</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">3</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">Grade 3</a>
                                </h3>
                                <p class="category-label">( 8 - 9 Years )</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">4</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">Grade 4</a>
                                </h3>
                                <p class="category-label">( 10 - 11 Years )</p>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="category-style1">
                                <div class="category-bg1"></div>
                                <div class="category-bg2"></div>
                                <div class="category-bg3"></div>
                                <div class="category-grade">
                                    <span class="grade-label">Grade</span>
                                    <span class="grade-name">5</span>
                                </div>
                                <h3 class="category-name h4">
                                    <a href="class.html" class="text-inherit">Grade 5</a>
                                </h3>
                                <p class="category-label">( 12 - 13 Years )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
        <section class="space-extra" data-bg-src="{{url('assets/img/table-bg-1-1.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-10 col-xxl-8">
                        <div class="table-style1">
                            <div class="table-icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <h2 class="sec-title">Session Times</h2>
                            <p class="sec-text">We provide full day care from 8.30am to 3.30pm for children aged 18 months to 5 years,</p>
                            <div class="table-body">
                                <div class="tr">
                                    <div class="th">Early Drop Off</div>
                                    <div class="td">8.00am – 10.00am</div>
                                </div>
                                <div class="tr">
                                    <div class="th">Morning</div>
                                    <div class="td">10.30am – 12.00am</div>
                                </div>
                                <div class="tr">
                                    <div class="th">Lunch</div>
                                    <div class="td">12noon – 1.00pm</div>
                                </div>
                                <div class="tr">
                                    <div class="th">Afternoon</div>
                                    <div class="td">2.00am – 4.00am</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="space">
            <div class="container">
                <div class="title-area text-center">
                    <div class="sec-bubble">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                    </div>
                    <h2 class="sec-title">preschool Classes</h2>
                    <p class="sec-text">Our preschool program has four dedicated classes</p>
                </div>
                <div class="row gx-50 gy-gx">
                    <div class="col-md-6">
                        <div class="class-style1">
                            <div class="class-img">
                                <a href="class-details.html">
                                    <img src="assets/img/class/cl-1-1.jpg" alt="class">
                                </a>
                            </div>
                            <div class="class-content">
                                <h3 class="class-title">
                                    <a class="text-inherit" href="class-details.html">Drawing & Painting</a>
                                </h3>
                                <p class="class-info">
                                    Available: <span class="info">20 Seats</span>
                                </p>
                                <p class="class-info">
                                    Required: <span class="info">2 - 6 Years</span>
                                </p>
                                <p class="class-price">
                                    $28 <span class="duration">/ month</span>
                                </p>
                                <a href="class-details.html" class="class-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="class-style1">
                            <div class="class-img">
                                <a href="class-details.html">
                                    <img src="assets/img/class/cl-1-2.jpg" alt="class">
                                </a>
                            </div>
                            <div class="class-content">
                                <h3 class="class-title">
                                    <a class="text-inherit" href="class-details.html">Color Matching</a>
                                </h3>
                                <p class="class-info">
                                    Available: <span class="info">15 Seats</span>
                                </p>
                                <p class="class-info">
                                    Required: <span class="info">7 - 10 Years</span>
                                </p>
                                <p class="class-price">
                                    $30 <span class="duration">/ month</span>
                                </p>
                                <a href="class-details.html" class="class-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="class-style1">
                            <div class="class-img">
                                <a href="class-details.html">
                                    <img src="assets/img/class/cl-1-3.jpg" alt="class">
                                </a>
                            </div>
                            <div class="class-content">
                                <h3 class="class-title">
                                    <a class="text-inherit" href="class-details.html">Brain Train</a>
                                </h3>
                                <p class="class-info">
                                    Available: <span class="info">25 Seats</span>
                                </p>
                                <p class="class-info">
                                    Required: <span class="info">11 - 13 Years</span>
                                </p>
                                <p class="class-price">
                                    $45 <span class="duration">/ month</span>
                                </p>
                                <a href="class-details.html" class="class-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="class-style1">
                            <div class="class-img">
                                <a href="class-details.html">
                                    <img src="assets/img/class/cl-1-4.jpg" alt="class">
                                </a>
                            </div>
                            <div class="class-content">
                                <h3 class="class-title">
                                    <a class="text-inherit" href="class-details.html">Music clipart</a>
                                </h3>
                                <p class="class-info">
                                    Available: <span class="info">36 Seats</span>
                                </p>
                                <p class="class-info">
                                    Required: <span class="info">14 - 18 Years</span>
                                </p>
                                <p class="class-price">
                                    $59 <span class="duration">/ month</span>
                                </p>
                                <a href="class-details.html" class="class-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="space-extra-bottom">
            <div class="container">
                <div class="row gx-80">
                    <div class="col-lg-6 col-xxl-auto pb-3 pb-xl-0">
                        <div class="img-box3">
                            <div class="img-1 mega-hover">
                                <img src="{{url('assets/img/faq-1-1.jpg')}}" alt="FAQ">
                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video position-center">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="vs-circle jump"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="title-area text-center text-lg-start">
                            <span class="sec-subtitle">choose your own grade level</span>
                            <h2 class="sec-title">Guide to Preschool</h2>
                        </div>
                        <div class="accordion accordion-style1" id="faqVersion1">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="headingOne1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">First Little Readers (Levels A-C)</button>
                                </div>
                                <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">What Age Do Kids Start Preschool?</button>
                                </div>
                                <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">Is My Child Ready for Preschool?</button>
                                </div>
                                <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">Can your child separate from you?</button>
                                </div>
                                <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFive1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">Can your child play with others?</button>
                                </div>
                                <div id="collapseFive1" class="accordion-collapse collapse" aria-labelledby="headingFive1" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Enrolment Events are like open days or open weeks at Busy Bees. It's a chance for you to visit your local nursery, take a look around, and see some of exciting activities in action.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-smoke space-top space-extra-bottom">
            <div class="container">
                <div class="row flex-row-reverse align-items-center gx-60">
                    <div class="col-lg-6 text-center text-lg-start mb-40 mb-lg-0">
                        <img src="{{url('assets/img/testi-1-1.png')}}" alt="childrens" class="w-100">
                    </div>
                    <div class="col-lg-6">
                        <div class="title-area text-center">
                            <span class="sec-subtitle">Testimonials</span>
                            <h2 class="sec-title">Parents Reviews</h2>
                        </div>
                        <div class="vs-carousel" data-fade="true" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true" data-sm-dots="true" data-xs-dots="true">
                            <div>
                                <div class="testi-style1">
                                    <div class="testi-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <h3 class="testi-name h2">Jannie Marko</h3>
                                    <div class="testi-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testi-text">They handle all situations professionally and with genuine care. I am absolutely delighted that my son has been there from almost day 1 and he really enjoys going.</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-style1">
                                    <div class="testi-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <h3 class="testi-name h2">Rodja Marino</h3>
                                    <div class="testi-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testi-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups ut labore et dolore.</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-style1">
                                    <div class="testi-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <h3 class="testi-name h2">John Deo</h3>
                                    <div class="testi-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testi-text">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage lipsum as it is sometimes known dummy text.</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-style1">
                                    <div class="testi-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <h3 class="testi-name h2">Franko Polo</h3>
                                    <div class="testi-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="testi-text">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-wrap1 space" data-bg-src="{{url('assets/img/newsletter-bg-1-1.png')}}">
            <div class="container">
                <div class="title-area text-center">
                    <div class="mb-3 pb-1">
                        <img src="{{url('assets/img/bell-1-1.svg')}}" alt="bell icon">
                    </div>
                    <p class="sec-text text-title font-title">Keep up to date with the latest news and offers</p>
                    <h2 class="sec-title2">Sign up for our newsletter</h2>
                </div>
                <form action="#" class="form-style1">
                    <div class="form-group">
                        <input type="email" placeholder="Enter Your Email Address...">
                        <button class="vs-btn" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </section>



        @include('layouts.footer')
    </body>
</html>
