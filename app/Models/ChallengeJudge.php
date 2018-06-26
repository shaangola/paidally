<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ChallengeJudge
 * 
 * @property int $id
 * @property int $context_role_user_id
 * @property int $decision_type_id
 * @property int $challenge_id
 * @property int $inviter_context_role_user_id
 * @property string $challenge_status
 * @property int $invitation_status
 * @property \Carbon\Carbon $invited_on
 * 
 * @property \App\Models\ContextRoleUser $context_role_user
 * @property \App\Models\DecisionType $decision_type
 * @property \App\Models\Challenge $challenge
 *
 * @package App\Models
 */
class ChallengeJudge extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'context_role_user_id' => 'int',
		'decision_type_id' => 'int',
		'challenge_id' => 'int',
		'inviter_context_role_user_id' => 'int',
		'invitation_status' => 'int'
	];

	protected $dates = [
		'invited_on'
	];

	protected $fillable = [
		'context_role_user_id',
		'decision_type_id',
		'challenge_id',
		'inviter_context_role_user_id',
		'challenge_status',
		'invitation_status',
		'invited_on'
	];

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class);
	}

	public function decision_type()
	{
		return $this->belongsTo(\App\Models\DecisionType::class);
	}

	public function challenge()
	{
		return $this->belongsTo(\App\Models\Challenge::class);
	}
}
