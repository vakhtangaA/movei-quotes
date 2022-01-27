<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
	public function handle(Request $request, Closure $next)
	{
		$lang = Session::get('lang');

		if ($lang === 'ka')
		{
			App::setLocale('ka');
		}
		else
		{
			App::setLocale('en');
		}

		return $next($request);
	}
}
