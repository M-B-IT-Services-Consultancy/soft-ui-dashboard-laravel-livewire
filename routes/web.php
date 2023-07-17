<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;
use App\Http\Livewire\Tenant;
use App\Http\Livewire\Property;
use App\Http\Livewire\Wizard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\GoogleController;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::livewire('/register','sign-up');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact.us.store');
Route::get('/terms', [HomeController::class,'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class,'privacy_policy'])->name('privacy-policy');
Route::get('/cookie', [HomeController::class,'cookie'])->name('cookie');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

// google social login
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback')->name('handleGoogleCallback');
});

Route::get('/login/{social}','App\Http\Livewire\Auth\Login@socialLogin')->where('social','facebook|google');
Route::get('/login/{social}/callback','App\Http\Livewire\Auth\Login@handleProviderCallback')->where('social','facebook|google');

Route::get('email-test', function(){
$details['email'] = 'brij.raj.singh2710@gmail.com';
dispatch(new App\Jobs\SendNewsletterSubscriptionConfirmation($details));
dd('done');
});

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

/**
 * URL for newsletter subscription
 */

//Route::group(['middleware' => 'web'], function() {
Route::post('/subscribe', [NewsletterSubscriptionController::class,'store'])->name('subscribe');
    Route::get('/unsubscribe',[NewsletterSubscriptionController::class,'destroy'])->name('unsubscribe');
//});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
//    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/tenants', Tenant::class)->name('tenants');
    Route::get('/property', Property::class)->name('property');
    Route::get('/wizard', Wizard::class)->name('wizard');
    
});

