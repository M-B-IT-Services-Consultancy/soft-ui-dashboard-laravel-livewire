<div>
   
@if(!empty($successMessage))
<div class="alert alert-success">
   {{ $successMessage }}
</div>
@endif
  
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
  
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
  
                <div>
                                    <label for="tenant_name">{{ __('Tenant Name') }}</label>
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
                                    @if ($tenant_photo)
                                        Photo Preview:
                                        <img src="{{ $tenant_photo->temporaryUrl() }}">
                                    @endif
                                    @error('tenant_photo') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_email">{{ __('Tenant Email') }}</label>
                                    <div class="@error('tenant_email')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_email" id="tenant_email" type="email" class="form-control"
                                            placeholder="Tenant Email" aria-label="Tenant Email" aria-describedby="tenant_email-addon">
                                    </div>
                                    @error('tenant_email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_phone">{{ __('Tenant Phone') }}</label>
                                    <div class="@error('tenant_phone')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_phone" id="tenant_phone" type="text" class="form-control"
                                            placeholder="Tenant Phone" aria-label="Tenant Phone" aria-describedby="tenant_phone-addon">
                                    </div>
                                    @error('tenant_phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_dob">{{ __('Tenant Phone') }}</label>
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
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
  
                <div class="form-group">
                    <label for="description">Product Status</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                    <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <div class="form-group">
                    <label for="description">Product Stock</label>
                    <input type="text" wire:model="stock" class="form-control" id="productAmount"/>
                    @error('stock') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
  
                <table class="table">
                    <tr>
                        <td>Tenant Name:</td>
                        <td><strong>{{$tenant_name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Tenant Photograph:</td>
                        <td><strong>{{$tenant_photo}}</strong></td>
                    </tr>
                    <tr>
                        <td>Tenant Phone:</td>
                        <td><strong>{{$tenant_phone}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product status:</td>
                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                    </tr>
                    <tr>
                        <td>Tenant Email:</td>
                        <td><strong>{{$tenant_email}}</strong></td>
                    </tr>
                    <tr>
                        <td>Tenant DOB:</td>
                        <td><strong>{{$tenant_dob}}</strong></td>
                    </tr>
                </table>
  
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>
</div>	