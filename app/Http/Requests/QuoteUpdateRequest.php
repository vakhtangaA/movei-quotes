<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteUpdateRequest extends FormRequest
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
		$quote_validation = ['required', 'string', 'min:5', 'max:400', 'unique_translation:quotes,quote,' . $this->quote_id];

		return [
			'quote.*'      => $quote_validation,
			'quote_poster' => ['required', 'image'],
		];
	}

	/**
	 * Custom message for validation
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'quote.*.unique_translation' => 'This quote already exists in database',
		];
	}
}
