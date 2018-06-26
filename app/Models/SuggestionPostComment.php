<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SuggestionPostComment
 * 
 * @property int $id
 * @property int $suggestion_id
 * @property string $comment_text
 * @property int $user_id_creator
 * @property \Carbon\Carbon $creation_timestamp
 *
 * @package App\Models
 */
class SuggestionPostComment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'suggestion_id' => 'int',
		'user_id_creator' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'suggestion_id',
		'comment_text',
		'user_id_creator',
		'creation_timestamp'
	];
}
