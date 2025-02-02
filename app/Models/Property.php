<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $table = 'property';
    protected $fillable = [
        'house_name','street_name','latitude','longitude','town','city','zip_code','county','country','status','added_by','approved_by','approved_at'
    ];
    
    public function landlord(){

        return $this->belongsTo(User::class, 'added_by', 'id');

    }
    public function rating_comments(){

        return $this->hasMany(RatingComments::class);
    }
}
