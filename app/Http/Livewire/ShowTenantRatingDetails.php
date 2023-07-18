<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowTenantRatingDetails extends Component
{
    public $tenant;
            
    public function ShowTenantRatingDetails($id){
        $tenant = Tenant::find(base64_decode($id));
        $this->tenant = $tenant;
        $this->emit('tenant', $tenant->id);
    }
    public function render()
    {
        
        return view('livewire.show-tenant-rating-details');
    }
}
