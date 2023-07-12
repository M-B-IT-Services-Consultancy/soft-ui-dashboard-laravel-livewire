<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class SearchTenant extends Component
{
    public $search = '';
    public $error = '';
    public $dodgyTenants = array();
    
    public function searchTenant(){
        try {
            
            $this->dodgyTenants = \App\Models\Tenant::with('tenant_rating')->where('tenant_name', 'like', '%' . $this->search . '%')
            ->get()
            ->toArray();
//            \App\Models\Tenant::with('tenant_rating')->get()
//                ->sortByDesc('id')
//            ->toArray();
            
//            echo (' m here');
//            $this->product = Product::where('name', 'like', '%'.$this->search.'%')->first();
//            $searchTenant = '%' . $this->search . '%';
//            $this->dodgyTenants = Tenant::with('tenant_rating')->get()
//                  ->where('tenant_name','like',$searchTenant)
//                ->pluck('tenant_rating.rating','tenant_name','tenant_phone','tenant_email');
//            $this->reset(['error']); // set $error to default i.e. ''
        } catch(ModelNotFoundException $e) {
            $this->error = 'No result found.'; 
        }
    }
    
    public function render()
    {
        return view('livewire.search-tenant',
                ['dodgyTenants'=> \App\Models\Tenant::with('tenant_rating')->where('tenant_name', 'like', '%' . $this->search . '%')
            ->get()
            ->toArray()
                ]);
    }
}
