<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EsceneComment
 * 
 * @property int $id
 * @property int $escene_id
 * @property string $comment
 * @property \Carbon\Carbon $creation_timestamp
 * @property int $user_id_creator
 * 
 * @property \App\Models\Escene $escene
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_likes
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_views
 *
 * @package App\Models
 */
class EsceneComment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'escene_id' => 'int',
		'user_id_creator' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'escene_id',
		'comment',
		'creation_timestamp',
		'user_id_creator'
	];

	public function escene()
	{
		return $this->belongsTo(\App\Models\Escene::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'user_id_creator');
	}

	public function escene_comment_likes()
	{
		return $this->hasMany(\App\Models\EsceneCommentLike::class);
	}

	public function escene_comment_views()
	{
		return $this->hasMany(\App\Models\EsceneCommentView::class);
	}
}
