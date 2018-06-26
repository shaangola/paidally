<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserInvitation
 * 
 * @property int $id
 * @property int $inviter_user_id
 * @property int $invitee_user_id
 * @property int $obj_id
 * @property string $obj_type
 * @property string $personal_message
 * @property \Carbon\Carbon $invited_on
 * @property int $invitation_status
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserInvitation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'inviter_user_id' => 'int',
		'invitee_user_id' => 'int',
		'obj_id' => 'int',
		'invitation_status' => 'int'
	];

	protected $dates = [
		'invited_on'
	];

	protected $fillable = [
		'inviter_user_id',
		'invitee_user_id',
		'obj_id',
		'obj_type',
		'personal_message',
		'invited_on',
		'invitation_status'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'invitee_user_id');
	}
}
