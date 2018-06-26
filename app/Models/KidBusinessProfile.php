<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KidBusinessProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property string $business_name
 * @property string $founded_year
 * @property string $start_up
 * @property string $about_business
 * @property string $mission
 * @property string $vision_goal
 * @property string $revenue
 * @property string $donated
 * @property string $feature_benefit
 * @property string $business_website
 * @property string $product_image
 * @property string $pitch_video_id
 * @property string $logo_image
 * @property string $status
 * @property \Carbon\Carbon $creation_timestamp
 * @property \Carbon\Carbon $updation_timestamp
 *
 * @package App\Models
 */
class KidBusinessProfile extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp',
		'updation_timestamp'
	];

	protected $fillable = [
		'user_id',
		'business_name',
		'founded_year',
		'start_up',
		'about_business',
		'mission',
		'vision_goal',
		'revenue',
		'donated',
		'feature_benefit',
		'business_website',
		'product_image',
		'pitch_video_id',
		'logo_image',
		'status',
		'creation_timestamp',
		'updation_timestamp'
	];
}
