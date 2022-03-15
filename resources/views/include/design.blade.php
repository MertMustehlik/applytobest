    @extends('template')
    @section('meta-description') UI/UX Design | App Design @endsection
    @section('title') Design - Apply @endsection
    @section('css')
    @endsection

    @section('master')
    <div class="empty bg-gray"></div>
    <div class="bg-gray">
        <div class="container-85">
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/design/design-1.png')}}" alt="content" class="w-100 h-auto">
                <h2 class="main-desc-title h3">UI/UX Design</h2>
            </div>
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/design/design-2.png')}}" alt="content" class="w-100 h-auto">
                <h2 class="main-desc-title h3">App Design</h2>
            </div>
        </div>
    </div>
    <div class="empty bg-gray"></div>

    <div class="empty"></div>
    <!-- Left Right Text -->
    <div class="container">
        <div class="main_left">
            <p class="main_left_title h2-strong">CONTACT US</p>
        </div>
        <div class="main_right">
            <p class="main_right_title h2">Let's work together</p>
            <div class="bot-line"></div>
            <p class="main_right_text">
                We're passionate about innovation, brilliant ideas and the execution that brings it all together in one beautiful experience.
                If you are too, call or send us an email to get started.
            </p>
            <br><br>
            <a href="{{route('contact')}}" class="contact-us">CONTACT US</a>
        </div>
    </div>
    <!-- ---- Left Right Text end ---- -->
    <div class="empty"></div>
    @endsection

    @section('js')
    @endsection