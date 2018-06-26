<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Endorsement
 * 
 * @property int $id
 * @property int $user_id_creator
 * @property int $user_id
 * @property string $message
 * @property int $owner_view_status
 * @property \Carbon\Carbon $creation_timestamp
 * @property int $delete_notification
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Endorsement extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id_creator' => 'int',
		'user_id' => 'int',
		'owner_view_status' => 'int',
		'delete_notification' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'user_id_creator',
		'user_id',
		'message',
		'owner_view_status',
		'creation_timestamp',
		'delete_notification'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
