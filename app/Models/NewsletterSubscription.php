<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsletterSubscription extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['email'];
    
    /**
     * NewsletterSubscription constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    
    /**
     * @return string
     */
    public function getHashAttribute()
    {
        return app('subscription-code-generator')->encodeFor($this);
    }

    /**
     * @return string
     */
    public function getUnsubscribeUrlAttribute()
    {
        return str_replace('{hash}', $this->hash, config('newsletter_subscription.unsubscribe_url'));
    }
}
