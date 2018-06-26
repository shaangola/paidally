<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Video
 * 
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $upload_thumbnail
 * @property int $user_id_creator
 * @property \Carbon\Carbon $created
 *
 * @package App\Models
 */
class Video extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id_creator' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'url',
		'upload_thumbnail',
		'user_id_creator',
		'created'
	];
}
