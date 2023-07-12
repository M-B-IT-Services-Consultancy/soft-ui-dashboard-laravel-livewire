<?php

namespace App\Http\Livewire;
use App\Models\Tatent;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Livewire\WithFileUploads;


use Livewire\Component;

class Tenant extends Component
{
    use WithFileUploads;
    public $tenant_name = '';
    public $tenant_photo = '';
    public $tenant_phone = '';
    public $tenant_email = '';
    public $tenant_dob = '';
    public $tenant_passport = '';
    public $tenant_passport_img = '';
    public $tenant_dl_number = '';
    public $tenant_dl_number_img = '';
    public $tenant_ni_number = '';
    public $tenant_ni_number_img = '';
    public $prop_issues = array(1=>'Rent arrears',2=>'Subletting',3=>'Behavior',4=>'Late payment',5=>'Farming',6=>'Drugs'); //Rent arrears =>1 Subletting=>2 Behavior=>3 Late payment => 4 Farming => 5 Drugs => 6
    public $tenants;
    
    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    public $showDemoNotification = false;

    
    protected $rules = [
        'tenant_name' => 'max:40|min:3',
        'tenant_email' => 'email:rfc,dns',
        'tenant_phone' => 'max:10',
        'tenant_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
    ];
    
    public function mount(){
        
        $this->tanents = \App\Models\Tenant::with('tenant_rating')->get()
                ->sortByDesc('id')
            ->toArray();
    }
        
    public function save() {
    
        $this->validate();
        
        $existingUser = Tenant::where('email', $this->email)->first();
        if($existingUser ) { 
            
            // tenant already marked
            
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            
            $this->tenant_photo->store('photos');
            
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        }
    }
    
    
    public function render()
    {
        return view('livewire.tenant')->with('prop_issues',$this->prop_issues);
    }
}
