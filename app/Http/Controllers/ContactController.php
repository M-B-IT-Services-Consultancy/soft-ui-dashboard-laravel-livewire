<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ContactusMail;

class ContactController extends Controller
{
    use Notifiable;
    
    public $email = 'dodgyoneuk@gmail.com';
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        
//        $input = $request->all();
        
        $data['data'] = ['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'message'=>$request->message];
        
        if($this->notify(new ContactusMail($data))){
            return redirect()->back()->with('success', 'Contact Form Submit Successfully');
        }else{
            return redirect()->back()->with('error', 'Some error occured please try again!');
        }
        
        
    }
}
