<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
	public function index($lang)
	{
		session()->put('lang', $lang);
		return redirect()->back();
	}
}
