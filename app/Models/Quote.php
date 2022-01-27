<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $fillable = ['quote', 'movie_id', 'imagePath'];

	public $translatable = ['quote'];

	/**
	 * Get the movie that owns the Quote
	 *
	 * @return BelongsTo
	 */
	public function movie(): BelongsTo
	{
		return $this->belongsTo(Movie::class, 'movie_id');
	}
}
