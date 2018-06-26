<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KidProductGallery
 * 
 * @property int $id
 * @property int $kid_business_profile_id
 * @property int $user_id
 * @property string $gallery_image_path
 * @property int $image_position
 * @property string $type
 *
 * @package App\Models
 */
class KidProductGallery extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'kid_business_profile_id' => 'int',
		'user_id' => 'int',
		'image_position' => 'int'
	];

	protected $fillable = [
		'kid_business_profile_id',
		'user_id',
		'gallery_image_path',
		'image_position',
		'type'
	];
}
