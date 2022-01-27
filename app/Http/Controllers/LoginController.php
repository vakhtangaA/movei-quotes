<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function showLogin()
	{
		return view('components.admin.login');
	}

	public function authenticate(LoginRequest $request)
	{
		$credentials = $request->only('name', 'password');

		if (Auth::attempt($credentials))
		{
			return redirect()->route('dashboard');
		}
		return redirect()->route('loginShow')->with('status', 'Invalid Credentials');
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		return redirect()->route('home');
	}
}
