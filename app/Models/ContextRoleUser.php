<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContextRoleUser
 * 
 * @property int $id
 * @property int $context_role_id
 * @property int $user_id
 * 
 * @property \App\Models\ContextRole $context_role
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $advice_shares
 * @property \Illuminate\Database\Eloquent\Collection $advices_latests
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judge_grand_winners
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judge_invitations
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judges
 * @property \Illuminate\Database\Eloquent\Collection $hindsight_shares
 * @property \Illuminate\Database\Eloquent\Collection $hindsights
 *
 * @package App\Models
 */
class ContextRoleUser extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'context_role_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'context_role_id',
		'user_id'
	];

	public function context_role()
	{
		return $this->belongsTo(\App\Models\ContextRole::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function advice_shares()
	{
		return $this->hasMany(\App\Models\AdviceShare::class);
	}

	public function advices_latests()
	{
		return $this->hasMany(\App\Models\AdvicesLatest::class);
	}

	public function challenge_judge_grand_winners()
	{
		return $this->hasMany(\App\Models\ChallengeJudgeGrandWinner::class);
	}

	public function challenge_judge_invitations()
	{
		return $this->hasMany(\App\Models\ChallengeJudgeInvitation::class, 'invitee_context_role_user_id');
	}

	public function challenge_judges()
	{
		return $this->hasMany(\App\Models\ChallengeJudge::class);
	}

	public function hindsight_shares()
	{
		return $this->hasMany(\App\Models\HindsightShare::class);
	}

	public function hindsights()
	{
		return $this->hasMany(\App\Models\Hindsight::class);
	}
}
