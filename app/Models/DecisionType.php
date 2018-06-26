<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DecisionType
 * 
 * @property int $id
 * @property string $decision_type
 * @property int $sequence
 * @property int $is_new
 * 
 * @property \Illuminate\Database\Eloquent\Collection $advices_latests
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $challenge_judges
 * @property \Illuminate\Database\Eloquent\Collection $hindsights
 *
 * @package App\Models
 */
class DecisionType extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sequence' => 'int',
		'is_new' => 'int'
	];

	protected $fillable = [
		'decision_type',
		'sequence',
		'is_new'
	];

	public function advices_latests()
	{
		return $this->hasMany(\App\Models\AdvicesLatest::class);
	}

	public function categories()
	{
		return $this->hasMany(\App\Models\Category::class);
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
