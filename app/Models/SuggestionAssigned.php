<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SuggestionAssigned
 * 
 * @property int $id
 * @property int $suggestion_id
 * @property int $user_id
 * @property \Carbon\Carbon $createdon
 *
 * @package App\Models
 */
class SuggestionAssigned extends Eloquent
{
	protected $table = 'suggestion_assigned';
	public $timestamps = false;

	protected $casts = [
		'suggestion_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'createdon'
	];

	protected $fillable = [
		'suggestion_id',
		'user_id',
		'createdon'
	];
}
