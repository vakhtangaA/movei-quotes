<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$quote = Quote::inRandomOrder()->first();

		return view('index', ['quote' => $quote]);
	}
}
