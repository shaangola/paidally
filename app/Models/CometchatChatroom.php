<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatChatroom
 * 
 * @property int $id
 * @property string $name
 * @property int $lastactivity
 * @property int $createdby
 * @property string $password
 * @property bool $type
 * @property string $vidsession
 * @property string $invitedusers
 * @property string $guid
 *
 * @package App\Models
 */
class CometchatChatroom extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'lastactivity' => 'int',
		'createdby' => 'int',
		'type' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'lastactivity',
		'createdby',
		'password',
		'type',
		'vidsession',
		'invitedusers',
		'guid'
	];
}
