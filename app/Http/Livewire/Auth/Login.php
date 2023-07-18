<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
//        $this->fill(['email' => 'admin@dodgy.com', 'password' => 'passowrd']);
    }

    public function login() {
        $credentials = $this->validate();
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');        
        }
        else{
            return $this->addError('email', trans('auth.failed')); 
        }
    }
    
     /**
    * Handle Social login request
    *
    * @return response
    */
   public function socialLogin($social)
   {
       return Socialite::driver($social)->redirect();
   }
   /**
    * Obtain the user information from Social Logged in.
    * @param $social
    * @return Response
    */
   public function handleProviderCallback($social)
   {
       try{
            $userSocial = Socialite::driver($social)->user();
            $user = User::where(['email' => $userSocial->getEmail()])->first();
            $finduser = User::where('social_id', $userSocial->id)->first();

            if($finduser){
      
                Auth::login($finduser);
     
                return redirect()->intended('/dashboard');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => encrypt('my-google')
                ]);
     
                Auth::login($newUser);
      
                return redirect()->intended('/dashboard');
            }
     
        } catch (Exception $e) {
            redirect(url()->previous().'#alert-msgs')
                ->with('warning',$e->getMessage());
            
        }
//       if($user){
//           Auth::login($user);
//           return redirect()->intended('/dashboard');
////           return redirect()->action('HomeController@index');
//       }else{
//           return view('auth.register',['name' => $userSocial->getName(), 'email' => $userSocial->getEmail()]);
//       }
       
   }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
