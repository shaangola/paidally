<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrLicense
 * 
 * @property int $id
 * @property string $owner
 * @property string $email
 * @property string $company
 * @property string $host
 * @property string $license_key
 * @property string $db
 * @property \Carbon\Carbon $expiration
 * @property string $type
 * @property string $version
 *
 * @package App\Models
 */
class MydbrLicense extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'expiration'
	];

	protected $fillable = [
		'owner',
		'email',
		'company',
		'host',
		'license_key',
		'db',
		'expiration',
		'type',
		'version'
	];
}
