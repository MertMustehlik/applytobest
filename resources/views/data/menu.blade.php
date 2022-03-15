    <!-- Nav -->
    <div class="menu">
        <div class="menu-item {{Route::is('branding')? 'active' : ''}}"><a href="{{route('branding')}}">BRANDING</a></div>
        <div class="menu-item {{Route::is('content')? 'active' : ''}}"><a href="{{route('content')}}">CONTENT</a></div>
        <div class="menu-item {{Route::is('design')? 'active' : ''}}"><a href="{{route('design')}}">DESIGN</a></div>
        <div class="menu-item {{Route::is('technology')? 'active' : ''}}"><a href="{{route('technology')}}">TECHNOLOGY</a></div>
        <div class="menu-item {{Route::is('contact')? 'active' : ''}}"><a href="{{route('contact')}}">CONTACT</a></div>
    </div>
    <!-- ---- Nav End ---- -->