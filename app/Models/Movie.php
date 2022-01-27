<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 * @method static paginate(int $int)
 * @method static find(mixed $get)
 */
class Movie extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['title'];

	protected $fillable = [
		'title', 'imagePath',
	];

	/**
	 * Get all the quotes for the Movie
	 *
	 * @return HasMany
	 */
	public function quotes(): HasMany
	{
		return $this->hasMany(Quote::class);
	}

	/**
	 * Get the user that owns the Movie
	 *
	 * @return BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
