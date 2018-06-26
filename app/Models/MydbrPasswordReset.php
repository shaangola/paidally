<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrPasswordReset
 * 
 * @property string $user
 * @property string $perishable_token
 * @property \Carbon\Carbon $request_time
 * @property string $ip_address
 *
 * @package App\Models
 */
class MydbrPasswordReset extends Eloquent
{
	protected $table = 'mydbr_password_reset';
	protected $primaryKey = 'user';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'request_time'
	];

	protected $hidden = [
		'perishable_token'
	];

	protected $fillable = [
		'perishable_token',
		'request_time',
		'ip_address'
	];
}
