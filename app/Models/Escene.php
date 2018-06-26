<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Escene
 * 
 * @property int $id
 * @property string $post_description
 * @property \Carbon\Carbon $post_date
 * @property int $user_id_creator
 * 
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_likes
 * @property \Illuminate\Database\Eloquent\Collection $escene_comments
 * @property \Illuminate\Database\Eloquent\Collection $escene_images
 *
 * @package App\Models
 */
class Escene extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id_creator' => 'int'
	];

	protected $dates = [
		'post_date'
	];

	protected $fillable = [
		'post_description',
		'post_date',
		'user_id_creator'
	];

	public function escene_comment_likes()
	{
		return $this->hasMany(\App\Models\EsceneCommentLike::class);
	}

	public function escene_comments()
	{
		return $this->hasMany(\App\Models\EsceneComment::class);
	}

	public function escene_images()
	{
		return $this->hasMany(\App\Models\EsceneImage::class);
	}
}
