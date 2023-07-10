<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptcha;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
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
  
        $input = $request->all();
  
        /*------------------------------------------
        --------------------------------------------
        Write Code for Store into Database
        --------------------------------------------
        --------------------------------------------*/
        dd($input);
  
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
