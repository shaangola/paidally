<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ChallengeJudgeGrandWinner
 * 
 * @property int $id
 * @property int $context_role_user_id
 * @property int $inviter_context_role_user_id
 * @property \Carbon\Carbon $invited_on
 * @property int $challenge_id
 * @property int $challenge_status
 * @property int $invitation_status
 * 
 * @property \App\Models\ContextRoleUser $context_role_user
 * @property \App\Models\Challenge $challenge
 *
 * @package App\Models
 */
class ChallengeJudgeGrandWinner extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'context_role_user_id' => 'int',
		'inviter_context_role_user_id' => 'int',
		'challenge_id' => 'int',
		'challenge_status' => 'int',
		'invitation_status' => 'int'
	];

	protected $dates = [
		'invited_on'
	];

	protected $fillable = [
		'context_role_user_id',
		'inviter_context_role_user_id',
		'invited_on',
		'challenge_id',
		'challenge_status',
		'invitation_status'
	];

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class);
	}

	public function challenge()
	{
		return $this->belongsTo(\App\Models\Challenge::class);
	}
}
