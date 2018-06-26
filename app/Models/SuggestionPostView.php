<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SuggestionPostView
 * 
 * @property int $id
 * @property int $object_id
 * @property int $other_user_id
 * @property int $view_status
 * @property string $view_type
 * @property int $suggestion_id
 * @property \Carbon\Carbon $creation_timestamp
 *
 * @package App\Models
 */
class SuggestionPostView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'object_id' => 'int',
		'other_user_id' => 'int',
		'view_status' => 'int',
		'suggestion_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'object_id',
		'other_user_id',
		'view_status',
		'view_type',
		'suggestion_id',
		'creation_timestamp'
	];
}
