<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestionPostView
 * 
 * @property int $id
 * @property int $object_id
 * @property int $other_user_id
 * @property int $view_status
 * @property string $view_type
 * @property int $question_id
 * @property \Carbon\Carbon $creation_timestamp
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class QuestionPostView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'object_id' => 'int',
		'other_user_id' => 'int',
		'view_status' => 'int',
		'question_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'object_id',
		'other_user_id',
		'view_status',
		'view_type',
		'question_id',
		'creation_timestamp'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'other_user_id');
	}
}
