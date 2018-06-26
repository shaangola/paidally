<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Partner
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email_address
 * @property string $phone
 * @property int $country_id
 * @property string $message
 * @property string $area_of_interest
 * @property \Carbon\Carbon $registration_date
 * @property string $organization
 *
 * @package App\Models
 */
class Partner extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $dates = [
		'registration_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'gender',
		'email_address',
		'phone',
		'country_id',
		'message',
		'area_of_interest',
		'registration_date',
		'organization'
	];
}
