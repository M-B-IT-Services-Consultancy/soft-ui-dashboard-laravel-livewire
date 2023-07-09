<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dodgyTenants[] = array('Ali Sultan','ali_sultan1986@hotmail.co.uk','07773320009'); 
        'Was subletting property, unpaid rent. He is a player of this industry and can fool reference companies easily. ';
        return view('front.home');
    }
    
    public function contact()
    {
        //
        return view('front.contact');
    }
    
    public function terms()
    {
        //
        return view('front.terms');
    }
    
    public function privacy_policy()
    {
        //
        return view('front.privacy_policy');
    }
    
    public function about()
    {
        //
        return view('front.about');
    }
    
    public function cookie()
    {
        //
        return view('front.cookie');
    }
    
    public function faq()
    {
        //
        return view('front.faq');
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
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
