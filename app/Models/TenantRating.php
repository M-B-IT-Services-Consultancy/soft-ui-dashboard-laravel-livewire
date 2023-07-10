<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantRating extends Model
{
    use HasFactory;
    
    protected $table = 'tenant_rating';
    protected $fillable = [
        'rating','property_issues','rating_description','testimonial_by','testimonial_at','property_owner_id','property_id',
        'tenant_id','property_rented_from','property_rented_till','status','approved_by','approved_at'
    ];
}
