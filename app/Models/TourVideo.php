<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TourVideo
 * 
 * @property int $id
 * @property int $tag_id
 * @property string $title
 * @property string $blog_detail
 * @property string $video_url
 * @property string $upload_thumbnail
 * @property \Carbon\Carbon $timestamp
 * @property int $created_by
 * @property int $updated_by
 * @property \Carbon\Carbon $updated_time
 *
 * @package App\Models
 */
class TourVideo extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'tag_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $dates = [
		'timestamp',
		'updated_time'
	];

	protected $fillable = [
		'tag_id',
		'title',
		'blog_detail',
		'video_url',
		'upload_thumbnail',
		'timestamp',
		'created_by',
		'updated_by',
		'updated_time'
	];
}
