<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BroadcastMessage
 * 
 * @property int $id
 * @property int $role_id
 * @property string $title
 * @property string $message
 * @property int $added_by
 * @property \Carbon\Carbon $added_on
 * @property int $status
 * @property int $view_status
 * @property int $message_event_type
 *
 * @package App\Models
 */
class BroadcastMessage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'added_by' => 'int',
		'status' => 'int',
		'view_status' => 'int',
		'message_event_type' => 'int'
	];

	protected $dates = [
		'added_on'
	];

	protected $fillable = [
		'role_id',
		'title',
		'message',
		'added_by',
		'added_on',
		'status',
		'view_status',
		'message_event_type'
	];
}
