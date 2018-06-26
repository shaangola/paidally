<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $advice_id
 * @property int $hindsight_id
 * @property int $	eluminati_detail_id
 * @property int $blog_id
 * @property string $type
 * @property string $rating
 * @property string $comments
 * @property int $user_id
 * @property \Carbon\Carbon $comment_postedon
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $comment_views
 *
 * @package App\Models
 */
class Comment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'advice_id' => 'int',
		'hindsight_id' => 'int',
		'	eluminati_detail_id' => 'int',
		'blog_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'comment_postedon'
	];

	protected $fillable = [
		'advice_id',
		'hindsight_id',
		'	eluminati_detail_id',
		'blog_id',
		'type',
		'rating',
		'comments',
		'user_id',
		'comment_postedon'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function comment_views()
	{
		return $this->hasMany(\App\Models\CommentView::class);
	}
}
