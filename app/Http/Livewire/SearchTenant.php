<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class SearchTenant extends Component {

    public $tenantSearch = '';
    public $error = '';
    public $rating = '';
    public $dodgyTenants;
    public $activeStatus = 1;
    public $prop_issues = array(1=>'Rent arrears',2=>'Subletting',3=>'Behavior',4=>'Late payment',5=>'Farming',6=>'Drugs'); //Rent arrears =>1 Subletting=>2 Behavior=>3 Late payment => 4 Farming => 5 Drugs => 6

    public function render() {

        if (!empty($this->tenantSearch)) {
            $this->dodgyTenants = \App\Models\Tenant::with('tenant_rating')
                    ->where('tenant_name', 'like', "%" . $this->tenantSearch . '%')
                    ->where('status', $this->activeStatus)
                    ->get()
                    ->toArray();
        }
        return view('livewire.search-tenant');
    }

}
