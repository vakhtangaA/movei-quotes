<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use App\Http\Requests\MovieStoreRequest;
use App\Http\Requests\MovieUpdateRequest;

class AdminController extends Controller
{
	public function index()
	{
		$movie = new Movie();

		$movies = $movie->orderBy('created_at', 'desc')->paginate(5);
		$currentMovie = $movie->find(request()->get('id'));
		$quotes = Quote::with('movie')->orderBy('movie_id')->paginate(7);
		return view('components.admin.dashboard', ['movies' => $movies, 'currentMovie' => $currentMovie, 'quotes' => $quotes]);
	}

	public function create()
	{
		return view('admin.create');
	}

	public function store(MovieStoreRequest $request)
	{
		$movie = new Movie;
		$imagePath = '/storage/' . request()->file('movie_poster')->store('filmPosters');

		$movie->imagepath = $imagePath;

		$movie
			->setTranslation('title', 'en', $request->title['en'])
			->setTranslation('title', 'ka', $request->title['ka'])
			->save();

		return redirect()->route('dashboard');
	}

	public function show(Movie $movie)
	{
		return view('components.admin.show', ['movie' => $movie]);
	}

	public function update(Movie $movie, MovieUpdateRequest $request)
	{
		$imagePath = '/storage/' . request()->file('movie_poster')->store('filmPosters');

		$movie->imagepath = $imagePath;

		$movie
			->setTranslation('title', 'en', $request->title['en'])
			->setTranslation('title', 'ka', $request->title['ka'])
			->save();

		return redirect()->route('dashboard');
	}

	public function destroy(Movie $movie)
	{
		Movie::destroy($movie->id);

		return redirect()->route('dashboard');
	}
}
