<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EsceneCommentView
 * 
 * @property int $id
 * @property int $escene_id
 * @property int $escene_comment_id
 * @property int $escene_comment_like_id
 * @property int $user_id
 * @property int $parent_user_id
 * @property int $comment_view_status
 * @property \Carbon\Carbon $timestamp
 * 
 * @property \App\Models\EsceneComment $escene_comment
 * @property \App\Models\User $user
 * @property \App\Models\EsceneCommentLike $escene_comment_like
 *
 * @package App\Models
 */
class EsceneCommentView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'escene_id' => 'int',
		'escene_comment_id' => 'int',
		'escene_comment_like_id' => 'int',
		'user_id' => 'int',
		'parent_user_id' => 'int',
		'comment_view_status' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'escene_id',
		'escene_comment_id',
		'escene_comment_like_id',
		'user_id',
		'parent_user_id',
		'comment_view_status',
		'timestamp'
	];

	public function escene_comment()
	{
		return $this->belongsTo(\App\Models\EsceneComment::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function escene_comment_like()
	{
		return $this->belongsTo(\App\Models\EsceneCommentLike::class);
	}
}
