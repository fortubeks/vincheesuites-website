@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="subheader" class="relative jarallax text-light">
        <img src="almaris/images/background/3.webp" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Contact Us</h1>
                    <p class="lead mt-3">
                        Have a question or need assistance with your booking? Our dedicated team is available around the clock to provide you with prompt and friendly service.
                    </p>
                    <ul class="crumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section class="relative lines-deco">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-7">
                    <div class="text-center">
                        <h3 class="mb-4">Write a Message</h3>
                    </div>
                    
                    <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                        <div class="row gx-4">
                            <div class="col-lg-6 col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="field-set mb20">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                        </div>
                            
                        
                        <div class="text-center">
                            <div class="g-recaptcha d-inline-block " data-sitekey="copy-your-sitekey-here"></div>

                            <div id='submit' class="mt20 text-cen">
                                <input type='submit' id='send_message' value='Send Message' class="btn-main">
                            </div>
                        </div>

                        <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>
                    </form>

                </div>
                
            </div>
        </div>
    </section>            

</div>
<!-- content close -->
@endsection
<script>
    window.addEventListener('load', function() {
        
    });
</script>