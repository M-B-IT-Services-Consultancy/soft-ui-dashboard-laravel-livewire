<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0 text-bold">Add Dodgy Tenant Information</h6>
                    <div class="text-bold">Dear Landlords: <span class="text-info text-normal">We care about your data and won't be showing your details online. Only your name will be displayed.</span></div>
                    <p class="text-small mt-1"><small>For example, when adding questionable tenant information to the portal, you need to provide your House No. However, you can rest assured that it will not be visible in the search results.</small></p>
                </div>
                <div class="card-body mt-4">
                    @if(!empty($successMessage))
                    <div class="alert alert-success">
                        {{ $successMessage }}
                    </div>
                    @endif

                    <div class="stepwizard mb-3">
                        <div class="stepwizard-row setup-panel">

                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                                <p class="{{ $currentStep != 1 ? 'text-normal text-secondary' : 'text-bold text-primary' }}">Step 1 (Tenant Info)</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                                <p class="{{ $currentStep != 2 ? 'text-normal text-secondary' : 'text-bold text-primary' }}">Step 2(Rating & Property Info)</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
                                <p class="{{ $currentStep != 3 ? 'text-normal text-secondary' : 'text-bold text-primary' }}">Step 3 (Review & Publish)</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                        <div class="col-12">
                            <div class="col-md-12">
                                <h3 class="title">Tenant Info</h3>

                                <div>
                                    <label class="required" for="tenant_name">{{ __('Tenant Name') }}</label>
                                    <div class="@error('tenant_name')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_name" id="tenant_name" type="text" class="form-control" required="required"
                                               placeholder="Tenant Name" aria-label="Tenant Name" aria-describedby="tenant_name-addon">
                                    </div>
                                    @error('tenant_name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_photo">{{ __('Tenant Photo') }}</label>
                                    <div class="@error('tenant_photo')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_photo" id="tenant_photo" type="file" class="form-control"
                                               placeholder="Tenant Photo" aria-label="Tenant Photo" aria-describedby="tenant_photo-addon">
                                    </div>
                                    <div wire:loading wire:target="tenant_photo" class="text-sm text-gray-500 italic">Uploading...</div>
                                    @if ($tenant_photo)
                                    Photo Preview:
<!--                                    <input type="hidden" wire:model="temp_tenant_photo" value="{{ $tenant_photo->temporaryUrl() }}" />-->
                                    <img src="{{ $tenant_photo->temporaryUrl() }}" class="img-fluid">
                                    @endif
                                    @error('tenant_photo') <div class="text-danger">{{ $message }}</div> @enderror


                                </div>
                                <div>
                                    <label for="tenant_email">{{ __('Tenant Email') }}</label>
                                    <div class="@error('tenant_email')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_email" id="tenant_email" type="email" class="form-control" required="required"
                                               placeholder="Tenant Email" aria-label="Tenant Email" aria-describedby="tenant_email-addon">
                                    </div>
                                    @error('tenant_email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_phone">{{ __('Tenant Phone') }}</label>
                                    <div class="@error('tenant_phone')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_phone" id="tenant_phone" type="text" class="form-control" required="required"
                                               placeholder="Tenant Phone" aria-label="Tenant Phone" aria-describedby="tenant_phone-addon">
                                    </div>
                                    @error('tenant_phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_dob">{{ __('Tenant DOB') }}</label>
                                    <div class="@error('tenant_dob')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_dob" id="tenant_dob" type="date" min="1950" class="form-control"
                                               placeholder="Tenant DOB" aria-label="Tenant DOB" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_dob') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_passport">{{ __('Tenant Passport #') }}</label>
                                    <div class="@error('tenant_passport')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_passport" id="tenant_passport" type="text" class="form-control"
                                               placeholder="Tenant Passport" aria-label="Tenant Passport" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_passport') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div>
                                    <label for="tenant_dl_number">{{ __('Tenant DL #') }}</label>
                                    <div class="@error('tenant_dl_number')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_dl_number" id="tenant_dl_number" type="text" class="form-control"
                                               placeholder="Tenant DL #" aria-label="Tenant DL #" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_dl_number') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div>
                                    <label for="tenant_ni_number">{{ __('Tenant NID') }}</label>
                                    <div class="@error('tenant_ni_number')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_ni_number" id="tenant_ni_number" type="text" class="form-control"
                                               placeholder="Tenant National ID" aria-label="Tenant NID" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_ni_number') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                        <div class="col-xs-12 mt-5">
                            <div class="col-md-12">
                                <h3> Rating & Property Info</h3>

                                <div class="form-group">
                                    <label for="description">Issues</label><br/>
                                    <div class="col-12">
                                        @foreach($prop_issues as $pi => $prop_issue)
                                        <div class="mt-1">
                                            <input type="checkbox" value="{{$pi}}" wire:model="property_issues.{{ $pi }}">
                                            {{ $prop_issue }} <br>
                                        </div>
                                        @endforeach
                                        <div class="mt-1">
                                            <input type="text" placeholder="Other" value="" wire:model="property_issues.{{ '0' }}"><br>
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Review Rating</label><br/>
                                        <div class="col-6 space-x-1 rating">
                                            <label for="star1">
                                                <input hidden wire:model="rating" type="radio" id="star1" name="rating" value="1" tooltip="Fair" data-toggle="tooltip" data-placement="bottom" title="tooltip on radio!" />
                                                <svg class="cursor-pointer block w-80 h-8 @if($rating >= 1 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star2">
                                                <input hidden wire:model="rating" type="radio" id="star2" name="rating" value="2" data-title="Bad"  />
                                                <svg class="cursor-pointer block w-80 h-8 @if($rating >= 2 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star3">
                                                <input hidden wire:model="rating" type="radio" id="star3" name="rating" value="3" title="Worst" />
                                                <svg class="cursor-pointer block w-80 h-8 @if($rating >= 3 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <small><ul class="list-group">
                                                    <li class="list-group-item border-0 px-0 pb-0">Worst(***)</li>
                                                    <li>Bad(**)</li>
                                                    <li>Fair(*)</li>
                                                </ul>                        </small>
                                        </div>
                                        @error('rating') <div class="text-danger">{{ $rating }}</div> @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="rating_description">Rating (Why is the tenant Dodgy?)</label>
                                        <textarea wire:model="rating_description" class="form-control" id="rating_description"></textarea>
                                        @error('rating_description') <span class="text-danger">{{ $rating_description }}</span> @enderror
                                    </div>
                                    <div>
                                        <h3>Property Address</h3>
                                        <div class="form-group">
                                            <label for="house_name">House Name/No (Hidden in search)</label>
                                            <input type="text" wire:model="house_name" class="form-control" id="house_name"/>
                                            @error('house_name') <span class="text-danger">{{ $house_name }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="street_name">Street Name</label>
                                            <input type="text" wire:model="street_name" class="form-control" id="street_name"/>
                                            @error('street_name') <span class="text-danger">{{ $street_name }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="town">Town</label>
                                            <input type="text" wire:model="town" class="form-control" id="town"/>
                                            @error('town') <span class="text-danger">{{ $town }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="zip_code">Zip Code</label>
                                            <input type="text" wire:model="zip_code" class="form-control" id="zip_code"/>
                                            @error('zip_code') <span class="text-danger">{{ $zip_code }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="county">County</label>
                                            <input type="text" wire:model="county" class="form-control" id="county"/>
                                            @error('county') <span class="text-danger">{{ $county }}</span> @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> Review</h3>

                                <!--<div class="table-responsive p-0">-->
                                <table class="table align-items-center justify-content-center mb-0">
                                    <tr>
                                        <td>Tenant Name:</td>
                                        <td><strong>{{$tenant_name}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant Photograph:</td>
                                        <td>
                                            @if ($tenant_photo)
                                            <img src="{{ $tenant_photo->temporaryUrl() }}" class="img-fluid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tenant Phone:</td>
                                        <td><strong>{{Str::mask($tenant_phone,'*',0,-4)}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant Email:</td>
                                        <td><strong>{{Str::mask($tenant_email,'*',4)}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant DOB:</td>
                                        <td><strong>{{$tenant_dob}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant Passport:</td>
                                        <td><strong>{{$tenant_passport}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant DOB:</td>
                                        <td><strong>{{$tenant_dob}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant DL Number:</td>
                                        <td><strong>{{$tenant_dl_number}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tenant NID:</td>
                                        <td><strong>{{$tenant_ni_number}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Rating:</td>
                                        <td>
                                            <div class="col-6 space-x-1 rating">
                                                <label for="star1">
                                                    <input hidden wire:model="rating" type="radio" id="star1" name="rating" value="1" tooltip="Fair" data-toggle="tooltip" data-placement="bottom" title="tooltip on radio!" />
                                                    <svg class="cursor-pointer block w-80 h-8 @if($rating >= 1 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </label>
                                                <label for="star2">
                                                    <input hidden wire:model="rating" type="radio" id="star2" name="rating" value="2" data-title="Bad"  />
                                                    <svg class="cursor-pointer block w-80 h-8 @if($rating >= 2 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </label>
                                                <label for="star3">
                                                    <input hidden wire:model="rating" type="radio" id="star3" name="rating" value="3" title="Worst" />
                                                    <svg class="cursor-pointer block w-80 h-8 @if($rating >= 3 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </label>
                                            </div>
                                        </td></tr>
                                    <tr>
                                        <td>Rating:</td>
                                        <td><strong>{{$rating_description}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Property Issues:</td>
                                        <td>
                                            @foreach($prop_issues as $pi => $prop_issue)
                                            <div class="mt-1">
                                                <input type="checkbox" value="{{$pi}}" wire:model="property_issues.{{ $pi }}">
                                                {{ $prop_issue }} <br>
                                            </div>
                                            @endforeach
                                            <div class="mt-1">
                                                <input type="text" placeholder="Other" value="" wire:model="property_issues.{{ '0' }}"><br>
                                            </div>
                                            <br><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>House Name:</td>
                                        <td><strong>{{Str::mask($house_name,'*',0)}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Street Name:</td>
                                        <td><strong>{{$street_name}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Town:</td>
                                        <td><strong>{{$town}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Zip Code:</td>
                                        <td><strong>{{$zip_code}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Country:</td>
                                        <td><strong>{{$county}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Uploaded By:</td>
                                        <td><strong>{{auth()->user()->name}}</strong></td>
                                    </tr>
                                </table>

                                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>