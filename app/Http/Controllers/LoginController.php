<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Socialite;
use Illuminate\Support\MessageBag;

use Carbon\Carbon;


use App\User;

class LoginController extends Controller
{
	public function getLogin(){
		return view('login');
	}

	public function postLogin(Request $request){
		$user = new User();

		$rules = $user->rules();
		$messages = $user->messages();

		$validator = Validator::make($request->all(), $rules, $messages);

    		if ($validator->fails()) {
    			return redirect()->back()->withErrors($validator)->withInput();
    		}
		else {
			$username = $request->input('username');
			$password = $request->input('password');

			if( Auth::guard('web')->attempt(['username' => $username, 'password' =>$password], 1)) {
				// Check user role
				if(Auth::user()->role == 'admin') return redirect('/admin');
				else if(Auth::user()->role == 'leader') return redirect('/leader');
				else if(Auth::user()->role == 'employee') return redirect('/employee');
				else return redirect('/login');
    			}
			else {
	    			$errors = new MessageBag(['errorlogin' => 'Incorrect username or password']);
	    			return redirect()->back()->withInput()->withErrors($errors);
	    		}			
		}	
	}

	public function redirectToProvider() {
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback() {
		try {
			$user = Socialite::driver('google')->user();
		}
		catch (Exception $e) {
			return redirect('/login');
		}

		$existingUser = User::where('email', $user->email)->first();
		if ($existingUser) {
			// Check user role
			auth()->login($existingUser, true);
			if(Auth::user()->role == 'admin') return redirect('/admin');
			else if(Auth::user()->role == 'leader') return redirect('/leader');
			else if(Auth::user()->role == 'employee') return redirect('/employee');
			else return redirect('/login');
		}
		else {
			$newUser = new User();
			$newUser->name = $user->name;
			$newUser->email = $user->email;
			$newUser->google_id = $user->id;
			$newUser->avatar = $user->avatar;
			$newUser->role = 'employee';
			$newUser->start_work = Carbon::now();
			$newUser->end_work = "";
			$newUser->save();

			auth()->login($newUser, true);
			
			return redirect('/employee');
		}
	}

	public function logout() {
		Auth::logout();
		return redirect('/login');
	}
}
