<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    
    protected $table = 'tenant';
    protected $fillable = [
        'tenant_name','tenant_photo','tenant_phone','tenant_email','tenant_dob','tenant_passport','tenant_passport_img',
        'tenant_dl_number','tenant_dl_number_img','tenant_ni_number','tenant_ni_number_img','status','approved_by','approved_at'
    ];
    
    public function tenant_rating() {
        return $this->hasOne(TenantRating::class);
    }
    
}
