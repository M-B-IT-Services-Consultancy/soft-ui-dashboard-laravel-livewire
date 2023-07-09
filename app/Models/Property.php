<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'house_name','street_name','latitude','longitude','town','city','zip_code','country','status','added_by','approved_by','approved_at'
    ];
}
