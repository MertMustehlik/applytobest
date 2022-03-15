    @extends('template')
    @section('meta-description') Video | Photography | Animation | 3D @endsection
    @section('title') Content - Apply @endsection
    @section('css')
    @endsection

    @section('master')
    <div class="empty bg-gray"></div>

    <div class="bg-gray">
        <div class="container-85">
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/content/content-1.png')}}" alt="video" class="w-100 h-auto">
                <h2 class="main-desc-title h3">Video</h2>
                <p class="main-desc">Video brand storytelling is at the forefront of everything we do. Video content is still the most impactful way to reach any audience.</p>
            </div>
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/content/content-2.png')}}" alt="photography" class="w-100 h-auto">
                <h2 class="main-desc-title h3">Photography</h2>
                <p class="main-desc">Social is the playground where your brand's communication happens. It is the engine that graows a brand following and allows your brand to connect with its consumers.</p>
            </div>
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/content/content-3.png')}}" alt="animation" class="w-100 h-auto">
                <h2 class="main-desc-title h3">Animation</h2>
                <p class="main-desc">Creative copywriting brings the voice of the brand to life. It sets the tone, defines the brands aspirations and cultivates a relationship with its audience.</p>
            </div>
            <div class="w-100 h-auto p-5 shadow p-3 mb-5">
                <img src="{{asset('assets/images/content/content-4.png')}}" alt="3d" class="w-100 h-auto">
                <h2 class="main-desc-title h3">3D</h2>
                <p class="main-desc">Some stories are harder to imagine or difficult to tell because of scale and budget, for those instances we like to leverage 3D content.</p>
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