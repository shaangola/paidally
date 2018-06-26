<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cityguide
 * 
 * @property int $id
 * @property string $city_guide_title
 * @property string $video_url
 * @property string $city_guide_image1
 * @property string $city_guide_image2
 * @property string $city_guide_title2
 * @property string $city_guide_title3
 * @property string $city_guide_title4
 * @property string $city_guide_title5
 * @property string $description1
 * @property string $description2
 * @property string $description3
 * @property string $description4
 * @property int $status
 *
 * @package App\Models
 */
class Cityguide extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'city_guide_title',
		'video_url',
		'city_guide_image1',
		'city_guide_image2',
		'city_guide_title2',
		'city_guide_title3',
		'city_guide_title4',
		'city_guide_title5',
		'description1',
		'description2',
		'description3',
		'description4',
		'status'
	];
}
