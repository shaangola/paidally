<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Challenge
 * 
 * @property int $id
 * @property string $challenge_title
 * @property \Carbon\Carbon $challenge_start_date
 * @property \Carbon\Carbon $challenge_end_date
 * @property int $challenge_status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $advices_latests
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judge_grand_winners
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judges
 * @property \Illuminate\Database\Eloquent\Collection $hindsights
 *
 * @package App\Models
 */
class Challenge extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'challenge_status' => 'int'
	];

	protected $dates = [
		'challenge_start_date',
		'challenge_end_date'
	];

	protected $fillable = [
		'challenge_title',
		'challenge_start_date',
		'challenge_end_date',
		'challenge_status'
	];

	public function advices_latests()
	{
		return $this->hasMany(\App\Models\AdvicesLatest::class);
	}

	public function challenge_judge_grand_winners()
	{
		return $this->hasMany(\App\Models\ChallengeJudgeGrandWinner::class);
	}

	public function challenge_judges()
	{
		return $this->hasMany(\App\Models\ChallengeJudge::class);
	}

	public function hindsights()
	{
		return $this->hasMany(\App\Models\Hindsight::class);
	}
}
