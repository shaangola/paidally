<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatChatroomsUser
 * 
 * @property int $userid
 * @property int $chatroomid
 * @property int $isbanned
 *
 * @package App\Models
 */
class CometchatChatroomsUser extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'chatroomid' => 'int',
		'isbanned' => 'int'
	];

	protected $fillable = [
		'isbanned'
	];
}
