<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteStoreRequest;
use App\Http\Requests\QuoteUpdateRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index(Movie $movie)
	{
		$quotes = Quote::get()->where('movie_id', '=', $movie->id);
		return view('components.quotes.index', ['quotes' => $quotes, 'movie' => $movie]);
	}

	public function store(QuoteStoreRequest $request)
	{
		$quote = new Quote;
		$imagePath = '/storage/' . request()->file('quote_poster')->store('filmPosters');

		$quote->imagepath = $imagePath;

		$quote->movie_id = request()->movie_id;

		$quote
			->setTranslation('quote', 'en', $request->quote['en'])
			->setTranslation('quote', 'ka', $request->quote['ka'])
			->save();

		return redirect()->route('dashboard');
	}

	public function update(QuoteUpdateRequest $request)
	{
		$quote = Quote::find(request()->quote_id);

		$imagePath = '/storage/' . request()->file('quote_poster')->store('filmPosters');

		$quote->imagepath = $imagePath;

		$quote
			->setTranslation('quote', 'en', $request->quote['en'])
			->setTranslation('quote', 'ka', $request->quote['ka'])
			->save();

		return redirect()->route('dashboard', ['slot'=>'quotes']);
	}

	public function destroy(Quote $quote)
	{
		Quote::destroy($quote->id);

		return redirect()->route('dashboard', ['slot'=>'quotes']);
	}
}
