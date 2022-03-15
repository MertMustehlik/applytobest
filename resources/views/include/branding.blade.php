    @extends('template')
    @section('meta-description') Apply to best | We create to best | App Design | App Development | Video Production | Website Design | Web Development | 3D Motion @endsection
    @section('title') Branding - Apply @endsection
    @section('css')
    @endsection

    @section('master')
    <div class="empty"></div>

    <!-- Left Right Text -->
    <div class="container">
        <div class="main_left">
            <p class="main_left_title h2-strong">DIGITAL CREATIVE<br>AGENCY</p>
        </div>
        <div class="main_right">
            <p class="main_right_title h2">A Brand-first<br>Creative Agency</p>
            <div class="bot-line"></div>
            <p class="main_right_text">What does that mean? It means that all our solutions begin with brand research
                and all of our work is catered to enhance and work with the brand at hand. It means we are always exploring the new,
                always innovating, with a focus on creative storytelling.
            </p>
        </div>
    </div>
    <!-- ---- Left Right Text end ---- -->

    <div class="empty"></div>

    <!-- ---- Works ---- -->
    <div class="container-85">
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-01.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Interior Architectural Brand</p>
                    <p class="text-title-2">Yazıcı Interiors</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-02.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Sustainable Clothing Brand</p>
                    <p class="text-title-2">True North</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-03.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Luxury Jewelry Brand</p>
                    <p class="text-title-2">Ro Crea</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-04.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Industrial Products Export Company</p>
                    <p class="text-title-2">Step Industry</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-05.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Creative Custom Studio</p>
                    <p class="text-title-2">Diex Customs</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-06.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">3rd Generation Coffee Shop</p>
                    <p class="text-title-2">Bone Coffe & Roasting</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-07.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Trauma & Spinal Solutions Company</p>
                    <p class="text-title-2">Vento Medical</p>
                </div>
            </a>
        </div>
        <div class="work">
            <a href="#">
                <img src="{{asset('assets/images/works/work-gallery-08.png')}}" alt="Work-gallery">
                <div class="work-text">
                    <p class="text-title-1">Professional Ceramic Tile Cutter Company</p>
                    <p class="text-title-2">Kristal</p>
                </div>
            </a>
        </div>
    </div>
    <!-- ---- Works end---- -->

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