@php
#print_r($tanents)
@endphp

<div class="container-xxl py-5">

    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Dodgy Tenant Reviews</h6>
            <h1 class="mb-5">Recent Reviews</h1>
        </div>
        <!--default-->
        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row package-item">
                <div class="col-lg-6 col-md-6">
                    <div class="package-item-sub">
                        <div class="overflow-hidden">
                            @php
                            $filename = '../assets/front/img/ali-sultan-fraud.png';
                            $filetype = pathinfo($filename, PATHINFO_EXTENSION);
                            $imgbinary = fread(fopen($filename, "r"), filesize($filename));
                            $file_url = 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
                            $tenant_email = 'ali_sultan1986@hotmail.co.uk';
                            $tenant_phone = '07773320009';
                            $property_address = 'Falmouth House, Clarendon Place, LONDON';
                            $property_issues = json_decode('{"0":"Resetingasd","2":"2","5":"5"}',true);
                            $property_issues_str = '';

                            foreach($property_issues as $pi => $property_issue){
                            if(isset($property_issues[0]) && $pi==0){
                            $property_issues_str .=  $property_issues[0] . ', ';
                            continue;
                            }
                            $property_issues_str .= $prop_issues[$property_issue]." ,";
                            }

                            $rating_desc = 'Was subletting property, unpaid rent. He is a player of this industry and can fool reference companies easily. ';
                            $post_code = 'W2 2NT';
                            $by = 'Miss G';
                            $rating = 3;
                            @endphp
                            <div class="responsive mt-2">
                                <table class="table table-bordered table-responsive">
                                    <tr><td>
                                            <img class="img-fluid" src="{{$file_url}}" alt="Ali Jamal Mohamad Sultan" />
                                        </td>
                                        <td>
                                            <table class="table table-bordered table-hover table-responsive table-success table-striped">
                                                <tr><th>Name:</th><td>Ali Jamal Mohamad Sultan</td></tr>
                                                <tr><th>Phone:</th><td>{{Str::mask($tenant_phone,'*',0,-4)}}</td></tr>
                                                <tr><th>Email:</th><td>{{Str::mask($tenant_email,'*',4)}}</td></tr>
                                                <tr><th>Property Issues:</th><td>
                                                        {{$property_issues_str}}
                                                    </td></tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <small class="flex-fill text-center"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$property_address}}</small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="overflow-hidden">
                        <div class="responsive mt-2">
                            <table class="table table-bordered table-responsive table-hover table-warning table-striped">
                                <tr>
                                    <th>By</th>
                                    <td>
                                        {{$by}}
                                    </td>

                                </tr>
                                <tr>
                                    <th>
                                        Rating
                                    </th>
                                    <td>
                                        <div class="mb-3">
                                            @for($s=1;$s<=3;$s++)
                                            <small class="fa fa-star text-{{ ($s<=$rating) ? 'danger' : 'gray'; }}"></small>
                                            @endfor                                
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Rating
                                    </th>
                                    <td>
                                        @if(isset($rating_desc))
                                        <p>{{$rating_desc}}</p>
                                        @else
                                        No Rating provided
                                        @endif
                                        <div class="d-flex justify-content-end mt-2 mb-2">
                                            <a href="#" class="btn btn-sm btn-primary px-3 border" style="border-radius: 30px">Read More</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row mt-5">
            @if($tanents)
    <div class="row g-4 justify-content-center ">
        @foreach($tanents as $tanent)
        @php
        if(isset($tanent['tenant_photo'])){
        $filename = Storage::url($tanent['tenant_photo']);
        //echo $filename;
        //                            $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        //                            $imgbinary = fread(fopen($filename, "r"), filesize($filename));
        //                          $file_url = 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
        //                        var_dump($file_url);die;        
        }

        $email = $tanent['tenant_email'];
        $property_address = '23 Falmouth House, Clarendon Place, LONDON';
        $post_code = 'W2 2NT';
        $by = 'Miss G';
        $rating = $tanent['tenant_rating']['rating'];
        @endphp
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
                <div class="overflow-hidden">
                    @if(isset($tanent['tenant_photo']) && file_exists($tanent['tenant_photo']))

                    <img src="{{ URL::to($filename) }}" class="img-fluid">
                    @else
                    <img class="img-fluid thumbnail" src="{{URL::to('assets/front/img/no-image.webp')}}" alt="">
                    @endif
                    
                </div>
                <div class="d-flex border-bottom">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>ABC</small>
                    
                </div>
                <div class="text-center p-4">
                    <h4 class="mb-0">Name: {{$tanent['tenant_name']}}</h4>

                    <h6 class="mb-0">Email: {{substr_replace($email, str_repeat('X', strlen($email)-5), 5);}}</h6>
                    <div class="mb-3">
                        @for($s=1;$s<=3;$s++)
                        <small class="fa fa-star text-{{ ($s<=$rating) ? 'danger' : 'gray'; }}"></small>
                        @endfor                                
                    </div>
                    @if(isset($tanent['tenant_rating']['rating_description']))
                    <p>{{$tanent['tenant_rating']['rating_description']}}</p>
                    @endif
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    @else
    {{__('No tenant Ratings added yet! Be the first one to add.')}}
    @endif
        </div>
        </div>
    </div>
</div>



</div>
