@extends('layouts.front.theme')



@section("topsearch")
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-5 text-white mb-3 animated slideInDown">Landlords helping landlords!</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Find dodgy tenants and stay safe with our bad <i class="text-primary">tenants</i> database</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            @livewire('search-tenant')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section("content")

    <!-- About Start -->
    <div class="container-xxl py-5">
            @include('front.flash-message')
                
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;" nonce="{{ csp_nonce() }}">
                    <div class="position-relative h-100">
                        <img class="img-fluid border border-primary rounded position-absolute w-100 h-100" src="{{URL::to('assets/front/img/free-about-us-paper-vector.jpg')}}" alt="" style="object-fit: cover;" nonce="{{ csp_nonce() }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">DodgyOne</span></h1>
                    <p class="mb-4">We started <span class="text-primary">dodgyone.com</span> after seeing tenants misusing property and disrespecting the contract. It cost almost <i class="text-danger fa fa-pound-sign"></i> <span class="text-danger text-bolder">20,000</span> to get property back from the dodgy tenant who was subletting property to prostitutes. </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Find bad tenants</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>List out Dodgy tenant</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Save yourself</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Help others</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Explore</h6>
                <h1 class="mb-5">Explore Categories</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-map-marker text-primary mb-4"></i>
                            <h5>City wise</h5>
                            <p>You may find a Dodgy tenant in our database by city-wise</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Property wise</h5>
                            <p>See your nearby if any Dodgy tenant</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Name wise</h5>
                            <p>You may search by its name in our database</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Recent</h5>
                            <p>The most recently marked dodgy tenant can be see in the recent section of the portal</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Recent Rating Start -->
    @livewire('recent-tenant-rating')
    
    <!-- Recent Rating End -->

    
    <!-- Destination Start -->
    @livewire('rating')
    <!-- Destination Start -->


    

    


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;" nonce="{{ csp_nonce() }}">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Register/Login to the Portal</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Our sign-in process is straightforward, allowing you to either use Google sign-in or provide minimal information such as your email, name, and password.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;" nonce="{{ csp_nonce() }}">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Add Dodgy tenant information</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Include suspicious tenant details such as their name, phone number, and email, which they used to rent your property, and choose from reasons such as unpaid rent, subletting, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;" nonce="{{ csp_nonce() }}">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Help others by doing so</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">As a property owner, you genuinely empathize with the distress caused by such situations. By participating, you are also assisting other landlords. Therefore, contribute to this worthy cause and make a positive impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    

    
        

@endsection