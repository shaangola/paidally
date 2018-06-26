<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestionPostLike
 * 
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property \Carbon\Carbon $creation_timestamp
 * 
 * @property \App\Models\Discussion $discussion
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class QuestionPostLike extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'question_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'question_id',
		'user_id',
		'creation_timestamp'
	];

	public function discussion()
	{
		return $this->belongsTo(\App\Models\Discussion::class, 'question_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
