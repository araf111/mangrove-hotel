<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Artisan;

class AuthController extends Controller {
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
	    
	    //dd(is_writable(config('session.files')));
	    
	     //Artisan::call('key:generate');
	     //Artisan::call('cache:clear');
	     //Artisan::call('config:clear');
	     //Artisan::call('route:clear');
	     //Artisan::call('view:clear');
	     
	     //dd(Hash::make('mangrove123'));
	     
		return view('admin.login');
	}

	/**
	 * Handle an authentication attempt.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return Response
	 */
	public function authenticate(AdminLoginRequest $request) {
		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials)) {
			// Authentication passed...
			return redirect()->intended('admin/dashboard');
		}
		return redirect('admin/login')->with('status', 'Oppes! You have entered invalid credentials');
	}

	public function logout() {
		Session::flush();
		Auth::logout();
		return Redirect('admin/login');
	}
}
