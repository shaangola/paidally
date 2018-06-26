<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Invitation
 * 
 * @property int $id
 * @property int $inviter_user_id
 * @property int $invitee_user_id
 * @property int $invitation_status
 * @property \Carbon\Carbon $invited_on
 * @property \Carbon\Carbon $updated_on
 * @property int $investible
 *
 * @package App\Models
 */
class Invitation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'inviter_user_id' => 'int',
		'invitee_user_id' => 'int',
		'invitation_status' => 'int',
		'investible' => 'int'
	];

	protected $dates = [
		'invited_on',
		'updated_on'
	];

	protected $fillable = [
		'inviter_user_id',
		'invitee_user_id',
		'invitation_status',
		'invited_on',
		'updated_on',
		'investible'
	];
}
