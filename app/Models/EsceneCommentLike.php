<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EsceneCommentLike
 * 
 * @property int $id
 * @property int $escene_id
 * @property int $escene_comment_id
 * @property \Carbon\Carbon $timestamp
 * @property int $user_id_creator
 * 
 * @property \App\Models\Escene $escene
 * @property \App\Models\EsceneComment $escene_comment
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_views
 *
 * @package App\Models
 */
class EsceneCommentLike extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'escene_id' => 'int',
		'escene_comment_id' => 'int',
		'user_id_creator' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'escene_id',
		'escene_comment_id',
		'timestamp',
		'user_id_creator'
	];

	public function escene()
	{
		return $this->belongsTo(\App\Models\Escene::class);
	}

	public function escene_comment()
	{
		return $this->belongsTo(\App\Models\EsceneComment::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'user_id_creator');
	}

	public function escene_comment_views()
	{
		return $this->hasMany(\App\Models\EsceneCommentView::class);
	}
}
