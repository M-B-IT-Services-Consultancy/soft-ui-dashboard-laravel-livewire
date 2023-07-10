<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tenant;
use App\Models\TenantRating;
use App\Models\Property;
use \Livewire\WithFileUploads;
use Auth;
use Mail;
use App\Notifications\TenantRatingSubmission;
use Illuminate\Notifications\Notifiable;
//use Intervention\Image;



class Wizard extends Component
{

    use WithFileUploads;
    use Notifiable;
    
    public $currentStep = 1;
    public $tenant_name, $tenant_photo, $temp_tenant_photo, $tenant_phone, $tenant_email, $rating_description,$tenant_dob=''; 
    public $tenant_passport, $tenant_dl_number, $tenant_ni_number=''; 
    public $house_name,$street_name,$town,$zip_code,$county=''; 
    public $property_issues = array();

    public $tenant_status = 1;
    public $property_status = 1;
    public $status = 1;
    public $rating = 1;
    public $successMessage = '';
    public $currentRating=false;
    public $email = 'dodgyoneuk@gmail.com';


    public $prop_issues = array(1=>'Rent arrears',2=>'Subletting',3=>'Behavior',4=>'Late payment',5=>'Farming',6=>'Drugs'); //Rent arrears =>1 Subletting=>2 Behavior=>3 Late payment => 4 Farming => 5 Drugs => 6

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'tenant_name' => 'required|min:5',
            'tenant_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tenant_email' => 'required|email:rfc,dns',
            'tenant_phone' => 'required',
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'rating' => 'required',
            'rating_description' => 'required',
        ]);
  
        $this->currentStep = 3;
    }
    
    public function rate()
    {
        $this->currentRating = true;
    }
  
    public function routeNotificationForMail() {
        return $this->email;
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        $watermark = '© 2023 dodgyone.com - All Rights Reserved';
//        $img = Image::make($this->tenant_photo);
//        $img->insert($watermark, 'center');

        $image = $this->tenant_photo->temporaryUrl();
        
//        $imgFile = Image::make($image->getRealPath());
//        $imgFile->text('© 2023 dodgyone.com - All Rights Reserved', 120, 100, function($font) { 
//            $font->size(35);  
//            $font->color('#ffffff');  
//            $font->align('center');  
//            $font->valign('bottom');  
//            $font->angle(90);  
//        })->save(public_path('/images/tenant_photo/'.Auth::user()->id).'/'.basename($image)); 
//        
//        $tenant_photo_path =  $this->tenant_photo->temporaryUrl()('images/tenant_photo/'.Auth::user()->id,'public');
        
        $imageName = time(). basename($image);
        $location = 'images/tenant_photo/'.Auth::user()->id;
        $this->tenant_photo->storeAs($location, $imageName);

        // add Tenant Information..
        $tenant = Tenant::create([
                'tenant_name' => $this->tenant_name,
                'tenant_photo' => $location . '/'. $imageName,
                'tenant_phone' => $this->tenant_phone,
                'tenant_email' => $this->tenant_email,
                'tenant_dob' => $this->tenant_dob,
                'tenant_passport' => $this->tenant_passport,
                'tenant_dl_number' => $this->tenant_dl_number,
                'tenant_ni_number' => $this->tenant_ni_number,
                'status' => $this->tenant_status,
        ]);
        
        $tenant_id = $tenant->id;
        
        $property_details = Property::create([
            'house_name' => $this->house_name,
            'street_name' => $this->street_name,
            'town' => $this->town,
            'zip_code' => $this->zip_code,
            'county' => $this->county,
            'status' => $this->property_status,
            'added_by' => Auth::user()->id,
        ]);
        
        $property_id = $property_details->id;
        
        $tenant_ratings = TenantRating::create([
            'rating' => $this->rating,
            'property_issues' => json_encode($this->property_issues),
            'rating_description'=> $this->rating_description,
            'testimonial_by' => Auth::user()->id,
            'property_owner_id' => Auth::user()->id,
            'property_id' => $property_id,
            'tenant_id' => $tenant_id,
            'status' => $this->status,
        ]);
        
        $this->notify(new TenantRatingSubmission(Auth::user()->email));
        
//        Mail::send('email',
//        array(
//            'name' => Auth::user()->name,
//            'email' => Auth::user()->email,
//            ),
//            function($message){
//                $message->from('support@dodgyone.com');
//                $message->to('brij.raj.singh2710@gmail.com', 'Brij Raj Singh')->subject('New Dodgy information submitted by '.Auth::user()->name);
//            }
//        );

//      $this->success = 'Thank you for reaching out to The Beauty Lounge. We will get back to you shortly.';
        
        $this->successMessage = 'Thank you for sharing the rating. It will be published soon';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->tenant_name ='';
        $this->tenant_photo = '';
        $this->temp_tenant_photo = '';
        $this->tenant_phone ='';
        $this->tenant_email='';
        $this->rating_description='';
        $this->tenant_dob=''; 
        $this->tenant_passport='';
        $this->tenant_dl_number='';
        $this->tenant_ni_number=''; 
        $this->house_name='';
        $this->street_name='';
        $this->town='';
        $this->zip_code ='';
        $this->county=''; 
        $this->property_issues = array();
        $this->status = 1;
    }
}
