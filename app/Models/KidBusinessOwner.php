<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KidBusinessOwner
 * 
 * @property int $id
 * @property int $kid_business_profile_id
 * @property int $user_id
 * @property string $business_owner
 *
 * @package App\Models
 */
class KidBusinessOwner extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'kid_business_profile_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'kid_business_profile_id',
		'user_id',
		'business_owner'
	];
}
