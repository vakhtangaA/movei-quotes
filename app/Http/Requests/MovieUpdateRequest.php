<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieUpdateRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$title_validation = ['required', 'unique_translation:movies,title,' . $this->movie->id];
		return [
			'title.*'      => $title_validation,
			'movie_poster' => ['required', 'image'],
		]
		;
	}

	/**
	 * Custom message for validation
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'title.*.unique_translation' => 'Movie with this title already exists in database',
		];
	}
}
