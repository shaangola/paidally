<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CommentView
 * 
 * @property int $id
 * @property int $comment_id
 * @property int $user_id
 * @property int $status
 * 
 * @property \App\Models\Comment $comment
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class CommentView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'comment_id' => 'int',
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'comment_id',
		'user_id',
		'status'
	];

	public function comment()
	{
		return $this->belongsTo(\App\Models\Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
