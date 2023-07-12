<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tenant;

class RecentTenantRating extends Component
{
    
    public $tanents;
    public $prop_issues = array(1=>'Rent arrears',2=>'Subletting',3=>'Behavior',4=>'Late payment',5=>'Farming',6=>'Drugs'); //Rent arrears =>1 Subletting=>2 Behavior=>3 Late payment => 4 Farming => 5 Drugs => 6

    public function mount(){
        
        
        $this->tanents = Tenant::with('tenant_rating')->get()
                ->sortByDesc('id')
                ->take(6)
            ->toArray();
        
    }

    public function render()
    {
        return view('livewire.recent-tenant-rating');
    }
}
