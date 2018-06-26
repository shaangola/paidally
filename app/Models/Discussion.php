<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Discussion
 * 
 * @property int $id
 * @property int $category_id
 * @property int $sub_category_id
 * @property string $question_title
 * @property string $description
 * @property string $status
 * @property int $user_id_creator
 * @property \Carbon\Carbon $added_on
 * @property string $question_reply
 * @property int $user_id
 * @property \Carbon\Carbon $updated_on
 * @property int $like_count
 * @property int $comment_count
 * @property int $network_user
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $question_post_comments
 * @property \Illuminate\Database\Eloquent\Collection $question_post_likes
 *
 * @package App\Models
 */
class Discussion extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'sub_category_id' => 'int',
		'user_id_creator' => 'int',
		'user_id' => 'int',
		'like_count' => 'int',
		'comment_count' => 'int',
		'network_user' => 'int'
	];

	protected $dates = [
		'added_on',
		'updated_on'
	];

	protected $fillable = [
		'category_id',
		'sub_category_id',
		'question_title',
		'description',
		'status',
		'user_id_creator',
		'added_on',
		'question_reply',
		'user_id',
		'updated_on',
		'like_count',
		'comment_count',
		'network_user'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'user_id_creator');
	}

	public function question_post_comments()
	{
		return $this->hasMany(\App\Models\QuestionPostComment::class, 'question_id');
	}

	public function question_post_likes()
	{
		return $this->hasMany(\App\Models\QuestionPostLike::class, 'question_id');
	}
}
