<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BroadcastMessageView
 * 
 * @property int $id
 * @property int $broadcast_message_id
 * @property int $user_id
 * @property int $status
 *
 * @package App\Models
 */
class BroadcastMessageView extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'broadcast_message_id' => 'int',
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'broadcast_message_id',
		'user_id',
		'status'
	];
}
