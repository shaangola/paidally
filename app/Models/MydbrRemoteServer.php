<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrRemoteServer
 * 
 * @property int $id
 * @property string $server
 * @property string $url
 * @property string $hash
 * @property string $username
 * @property string $password
 *
 * @package App\Models
 */
class MydbrRemoteServer extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'server',
		'url',
		'hash',
		'username',
		'password'
	];
}
