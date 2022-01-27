<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Quote::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$posterPaths = ['/images/ape.jpg', '/images/clo.jpeg', '/images/clo1.jpg'];

		$movies = Movie::all()->pluck('id')->toArray();
		return [
			'quote' => [
				'en' => $this->faker->text(),
				'ka' => $this->faker->text(),
			],
			'movie_id'  => $this->faker->randomElement($movies),
			'imagePath' => $this->faker->randomElement($posterPaths),
		];
	}
}
