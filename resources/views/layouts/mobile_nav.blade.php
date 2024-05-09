<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle">
            <i class="fal fa-times"></i>
        </button>
        <div class="mobile-logo">
            <a href="{{url('/')}}">
                <img src="{{url('assets/img/logo.png')}}" alt="Pragyani Montessori" style="max-width: 150px;">
            </a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>

                </li>
                <li>
                    <a href="{{url('about')}}">About Us</a>
                </li>
                {{-- <li>
                    <a href="match.html">Teachers</a>

                </li> --}}
                {{-- <li>
                    <a href="">Blog</a>

                </li>
                <li>
                    <a href="">Gallery</a>

                </li>
                 --}}
                <li>
                   <a href="{{ url('announcements') }}">Announcements</a>

                </li>

                <li>
                    <a href="{{url('contact-us')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
