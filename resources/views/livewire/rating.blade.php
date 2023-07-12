<div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Recent Reviews</h6>
                <h1 class="mb-5">Dodgy</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{URL::to('assets/front/img/farming-2.jpeg')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Worst</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Xyz, property</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{URL::to('assets/front/img/farming.jpeg')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Bad</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">ABC, apartment</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{URL::to('assets/front/img/farming-3.jpeg')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Fair</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Nic, locality</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;" nonce="{{ csp_nonce() }}">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{URL::to('assets/front/img/farming-4.jpeg')}}" alt="" style="object-fit: cover;" nonce="{{ csp_nonce() }}">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Worst</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">BCD, Local</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--<div>
    <div class="text-sm flex justify-between mt-2">
        <span>Average Rating: </span>
        <span class="text-lg text-white font-extrabold rounded-md bg-blue-600 px-2">{{ $avgRating }}</span>
    </div>

    <div class="flex items-center mt-0">
        <span class="text-sm">Your rating:</span>
        <div class="flex items-center ml-2">
            @for ($i = 0; $i < $this->rating; $i++)
                <svg wire:click="setRating({{ $i+1 }})" class="w-3 h-3 fill-current text-yellow-600"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z">
                    </path>
                </svg>
            @endfor

            @for ($i = $this->rating; $i < 5; $i++)
                <svg wire:click="setRating({{ $i+1 }})" class="w-3 h-3 fill-current text-gray-400"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z">
                    </path>
                </svg>
            @endfor
        </div>
    </div>
</div>-->
