{{-- Variables disponibles --}}
@extends('templates.page')

@section('title')
    Contact Us
@endsection

@section('content')

    <div class="section section-map">
        <div class="col-sm-12" style="padding:0;">
            <!-- Map -->
            <div id="contact-us-map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d161689.84051325297!2d5.68397173444873!3d50.712448181302165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f41c3d702da7%3A0x2d5b3cb7b45da7ab!2sIEPS%20Fl%C3%A9ron!5e0!3m2!1sfr!2sbe!4v1612494072264!5m2!1sfr!2sbe"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <!-- End Map -->
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <h3>Get in Touch with Us</h3>
                <hr>
                <div class="col-sm-6">
                    <!-- Contact Info -->
                    <p class="contact-us-details">
                        <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br />
                        <b>Phone:</b> +44 123 654321<br />
                        <b>Fax:</b> +44 123 654321<br />
                        <b>Email:</b> <a
                            href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                    </p>
                    <!-- End Contact Info -->
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>

@endsection
