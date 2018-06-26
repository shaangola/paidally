<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ChallengeJudgeInvitation
 * 
 * @property int $id
 * @property int $inviter_context_role_user_id
 * @property int $invitee_context_role_user_id
 * @property \Carbon\Carbon $invited_on
 * @property string $invitation_status
 * 
 * @property \App\Models\ContextRoleUser $context_role_user
 *
 * @package App\Models
 */
class ChallengeJudgeInvitation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'inviter_context_role_user_id' => 'int',
		'invitee_context_role_user_id' => 'int'
	];

	protected $dates = [
		'invited_on'
	];

	protected $fillable = [
		'inviter_context_role_user_id',
		'invitee_context_role_user_id',
		'invited_on',
		'invitation_status'
	];

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class, 'invitee_context_role_user_id');
	}
}
