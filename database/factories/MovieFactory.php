<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Movie::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$posterPaths = ['/images/ape.jpg', '/images/clo.jpeg', '/images/clo1.jpg'];

		return [
			'title' => [
				'en' => $this->faker->word(),
				'ka' => $this->faker->word(),
			],
			'imagePath' => $this->faker->randomElement($posterPaths),
		];
	}

	/**
	 * Get all of the quotes for the MovieFactory
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function quotes()
	{
		return $this->hasMany(Quote::class);
	}
}
