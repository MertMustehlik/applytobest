    @extends('template')
    @section('meta-description') Contact us and we will create the best for you. @endsection
    @section('title') Contact - Apply @endsection
    @section('css')
    @endsection

    @section('master')
    <div class="contact-container d-flex justify-content-center">
        <div class="cover w-100 h-100 d-flex justify-content-center">
            <div class="contact-wrap row col-6">

                <div class="contact-icon col-6 d-flex align-items-center flex-column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <h5 class="mt-2" style="font-family: Hoefler;">Phone</h5>
                    <p style="font-family: 'Roboto'; font-size:13px;"><a href="tel:+90506 369 3030">+90506 369 3030</a></p>
                </div>
                <div class="contact-icon col-6 d-flex align-items-center flex-column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    <h5 class="mt-2" style="font-family: Hoefler;">Mail</h5>
                    <p style="font-family: 'Roboto'; font-size:13px;"><a href="mailto:info@applytobest.com">info@applytobest.com</a></p>
                </div>

                <div class="empty"></div>

                <h3 class="mb-4 text-center" style="font-family: 'Hoefler';">Get in touch with us</h3>
                @if(session('botWarning'))
                    <div class="alert alert-danger">{{session('botWarning')}}</div>
                @endif
                @if($errors->any())
                    <ul>
                        <div class="alert alert-danger" style="padding-left: 40px;">
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </div>
                    </ul>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <form action="{{route('contact-post')}}" method="post">
                    @csrf
                    <input type="hidden" name="visit_time" value="{{time()}}">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Name</label>
                        <input name="name" type="text" id="form6Example3" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example4">Mail</label>
                        <input name="mail" type="text" id="form6Example4" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example4">Phone</label>
                        <input name="phone" type="number" id="form6Example4" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example4">Message</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <!-- Bot-Control -->
                    <div class="form-outline mb-4" style="display: none;">
                        <label class="form-label" for="form6Example4">Empty</label>
                        <input name="botControl" type="text" id="form6Example4" class="form-control" />
                    </div>
                    <!-- Bot-Control-End -->
                    <button type="submit" class="btn btn-primary mb-4 w-100" style="font-size: 16px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
    @endsection