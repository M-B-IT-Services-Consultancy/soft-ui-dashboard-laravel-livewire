@extends('layouts.front.theme')


@section("content")

<!--<script src="https://www.google.com/recaptcha/api.js" nonce="{{ csp_nonce() }}"></script>-->

<div class="container-fluid bg-primary hero-header">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-light" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-light" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

   <!-- Contact Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">Want to get in touch with us?</p>
                    
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0"> Please email us at <a href="mailto:support@dodgyone.com">support@dodgyone.com</a> </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card-body">
                     
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                              
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group-">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   
                            <div class="col-12 mt-2">
                                <button class="rounded-pill py-2 px-4 btn btn-primary btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<!-- <div class="form-group">
                    <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script><div class="g-recaptcha" theme="light" id="buzzNoCaptchaId_e2b52330cb39124ef34114d0c29cb013" data-sitekey="6Lc7R0MjAAAAAE-DjSGkHQb-fAo9GDqEP6t_19jw"></div>
                                    </div>
                <div>-->

<script type="text/javascript">
    $('#contactUSForm').submit(function(event) {
        event.preventDefault();
    
        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contactUSForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $('#contactUSForm').unbind('submit').submit();
            });;
        });
    });
</script>
@endsection