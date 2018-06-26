<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatChatroommessage
 * 
 * @property int $id
 * @property int $userid
 * @property int $chatroomid
 * @property string $message
 * @property int $sent
 *
 * @package App\Models
 */
class CometchatChatroommessage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'chatroomid' => 'int',
		'sent' => 'int'
	];

	protected $fillable = [
		'userid',
		'chatroomid',
		'message',
		'sent'
	];
}
