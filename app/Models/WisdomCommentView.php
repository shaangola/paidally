<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WisdomCommentView
 * 
 * @property int $id
 * @property int $wisdom_comment_id
 * @property int $user_id
 * @property int $status
 * 
 * @property \App\Models\User $user
 * @property \App\Models\WisdomComment $wisdom_comment
 *
 * @package App\Models
 */
class WisdomCommentView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'wisdom_comment_id' => 'int',
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'wisdom_comment_id',
		'user_id',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function wisdom_comment()
	{
		return $this->belongsTo(\App\Models\WisdomComment::class);
	}
}
