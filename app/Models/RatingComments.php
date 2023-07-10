<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingComments extends Model
{
    use HasFactory;
    
    protected $table ='rating_comments';
    protected $fillable = ['rating_id','user_id','rating_user_name','rating_user_email','rating_comment','status','approved_by','approved_at'];
}
