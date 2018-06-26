<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CitizenReference
 * 
 * @property int $id
 * @property int $referal_user_id
 * @property string $email_address
 * @property string $status
 * @property \Carbon\Carbon $creation_timestamp
 * @property \Carbon\Carbon $accepted_timestamp
 *
 * @package App\Models
 */
class CitizenReference extends Eloquent
{
	protected $table = 'citizen_reference';
	public $timestamps = false;

	protected $casts = [
		'referal_user_id' => 'int'
	];

	protected $dates = [
		'creation_timestamp',
		'accepted_timestamp'
	];

	protected $fillable = [
		'referal_user_id',
		'email_address',
		'status',
		'creation_timestamp',
		'accepted_timestamp'
	];
}
