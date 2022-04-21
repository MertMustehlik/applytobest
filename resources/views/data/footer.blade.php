    <!-- ---- Footer ---- -->
    <div class="footer">
        <div class="footer-container">
            <div class="footer-item">
                <span class="footer-logo">
                    <a href="{{route('branding')}}"><img src="{{asset('assets/images/apply-logo-loader.png')}}" alt="apply-logo"></a>
                </span>
            </div>
            <div class="footer-item">
                <p class="footer-title">BECOME A CLIENT</p>
                @if($settings->phoneDurum == 1)
                <p><a href="tel:{{$settings->phone}}">{{$settings->phone}}</a></p>
                @endif
                @if($settings->mailDurum == 1)
                <p><a href="mailto:{{$settings->mail}}">{{$settings->mail}}</a></p>
                @endif
            </div>
            <div class="footer-item">
                <div class="footer-menu">
                    <p class="footer-title">MAIN</p>
                    <p><a href="{{route('branding')}}">Home</a></p>
                    <p><a href="{{route('branding')}}">Branding</a></p>
                    <p><a href="{{route('content')}}">Content</a></p>
                    <p><a href="{{route('design')}}">Design</a></p>
                    <p><a href="{{route('technology')}}">Technology</a></p>
                    <p><a href="{{route('contact')}}">Contact</a></p>
                </div>
                <div class="footer-menu">
                    <p class="footer-title">SERVICES</p>
                    <p><a href="{{route('branding')}}">Branding</a></p>
                    <p><a href="{{route('content')}}">Content</a></p>
                    <p><a href="{{route('design')}}">Design</a></p>
                    <p><a href="{{route('technology')}}">Technology</a></p>
                </div>
                <div class="footer-menu">
                    <p class="footer-title">FOCUS</p>
                    <p><a href="{{route('design')}}">App Design</a></p>
                    <p><a href="{{route('technology')}}">App Development</a></p>
                    <p><a href="{{route('content')}}">Video Production</a></p>
                    <p><a href="{{route('technology')}}">Website Design</a></p>
                    <p><a href="{{route('technology')}}">Web Development</a></p>
                    <p><a href="{{route('content')}}">3D Motion</a></p>
                </div>
                <div class="footer-menu">
                    <p class="footer-title">INDUSTRIES</p>
                    <p><a href="#">Medical</a></p>
                    <p><a href="#">Food & Beverge</a></p>
                    <p><a href="#">Building</a></p>
                    <p><a href="#">Real Estate</a></p>
                    <p><a href="#">Sports And Entertainment</a></p>
                    <p><a href="#">Automotive</a></p>
                    <p><a href="#">Startups</a></p>
                </div>
            </div>
        </div>
        <div class="empty"></div>
    </div>
    <div class="footer-social">
        <ul>
            @if($settings->linkedinDurum == 1))
            <li><a href="{{$settings->linkedin}}" target="_blank"><img src="{{asset('assets/images/social/linkedin.png')}}"></a></li>
            @endif
            @if($settings->whatsappDurum == 1)
            <li><a href="https://wa.me/{{$settings->whatsapp}}" target="_blank"><img src="{{asset('assets/images/social/wp.png')}}"></a></li>
            @endif
            @if($settings->instagramDurum == 1)
            <li><a href="{{$settings->instagram}}" target="_blank"><img src="{{asset('assets/images//social/insta.png')}}"></a></li>
            @endif
            
            
        </ul>
    </div>
    <!-- ---- Footer end ---- -->