<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterSubscriptionRequest;
use App\Http\Requests\UpdateNewsletterSubscriptionRequest;
use App\Models\NewsletterSubscription;
use App\Jobs\SendNewsletterSubscriptionConfirmation;
use Illuminate\Notifications\Notifiable;
use App\Notifications\NewsletterSubscriptionMail;

class NewsletterSubscriptionController extends Controller
{
    use Notifiable;
    
    public $email='';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsletterSubscriptionRequest $request)
    {
        //
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        $existingSubscription = NewsletterSubscription::withTrashed()->whereEmail($data['email'])->first();
        
        if ($existingSubscription) {
            if ($existingSubscription->trashed()) {
                $existingSubscription->restore();
                SendNewsletterSubscriptionConfirmation::dispatch($existingSubscription);
            }
        } else {
            $subscription = NewsletterSubscription::create(['email'=>$data['email']]);
            SendNewsletterSubscriptionConfirmation::dispatch($subscription);
        }
        
        $this->email = $data['email'];
        $this->notify(new NewsletterSubscriptionMail($data['email']));
        
        return redirect()->back()
            ->with('flash', __('You will receive the latest news at :email', ['email' => $data['email']]));
        //You will no longer receive our newsletter at :email
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterSubscriptionRequest $request, NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
//        $subscription = app('subscription-code-generator')->decode($hash);
        $newsletterSubscription->delete();

        return redirect()->back()
            ->with('success', __('You will no longer receive our newsletter at :email', ['email' => $newsletterSubscription->email]));
//        return redirect()->back()
//            ->with('success', __('You will receive the latest news at :email', ['email' => $data['email']]));
        //You will no longer receive our newsletter at :email
    }
}
