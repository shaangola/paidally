<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SuggestionPostLike
 * 
 * @property int $id
 * @property int $suggestion_id
 * @property int $user_id
 * @property \Carbon\Carbon $creation_timestamp
 *
 * @package App\Models
 */
class SuggestionPostLike extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'suggestion_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'suggestion_id',
		'user_id',
		'creation_timestamp'
	];
}
