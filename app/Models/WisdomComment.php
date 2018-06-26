<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WisdomComment
 * 
 * @property int $id
 * @property int $publication_id
 * @property string $rating
 * @property string $comments
 * @property int $user_id
 * @property \Carbon\Carbon $comment_postedon
 * 
 * @property \App\Models\Publication $publication
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $wisdom_comment_views
 *
 * @package App\Models
 */
class WisdomComment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'publication_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'comment_postedon'
	];

	protected $fillable = [
		'publication_id',
		'rating',
		'comments',
		'user_id',
		'comment_postedon'
	];

	public function publication()
	{
		return $this->belongsTo(\App\Models\Publication::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function wisdom_comment_views()
	{
		return $this->hasMany(\App\Models\WisdomCommentView::class);
	}
}
