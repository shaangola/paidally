<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Hindsight
 * 
 * @property int $id
 * @property int $challenge_id
 * @property int $decision_type_id
 * @property int $category_id
 * @property \Carbon\Carbon $hindsight_decision_date
 * @property string $hindsight_title
 * @property string $outcome
 * @property string $hindsight_description
 * @property string $short_description
 * @property int $context_role_user_id
 * @property int $hindsight_views
 * @property \Carbon\Carbon $hindsight_posted_date
 * @property \Carbon\Carbon $hindsight_update_date
 * @property int $judgement_status
 * @property int $grand_winner_status
 * @property int $draft
 * @property int $network_type
 * 
 * @property \App\Models\DecisionType $decision_type
 * @property \App\Models\ContextRoleUser $context_role_user
 * @property \App\Models\Challenge $challenge
 * @property \Illuminate\Database\Eloquent\Collection $hindsight_details
 * @property \Illuminate\Database\Eloquent\Collection $hindsight_shares
 *
 * @package App\Models
 */
class Hindsight extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'challenge_id' => 'int',
		'decision_type_id' => 'int',
		'category_id' => 'int',
		'context_role_user_id' => 'int',
		'hindsight_views' => 'int',
		'judgement_status' => 'int',
		'grand_winner_status' => 'int',
		'draft' => 'int',
		'network_type' => 'int'
	];

	protected $dates = [
		'hindsight_decision_date',
		'hindsight_posted_date',
		'hindsight_update_date'
	];

	protected $fillable = [
		'challenge_id',
		'decision_type_id',
		'category_id',
		'hindsight_decision_date',
		'hindsight_title',
		'outcome',
		'hindsight_description',
		'short_description',
		'context_role_user_id',
		'hindsight_views',
		'hindsight_posted_date',
		'hindsight_update_date',
		'judgement_status',
		'grand_winner_status',
		'draft',
		'network_type'
	];

	public function decision_type()
	{
		return $this->belongsTo(\App\Models\DecisionType::class);
	}

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class);
	}

	public function challenge()
	{
		return $this->belongsTo(\App\Models\Challenge::class);
	}

	public function hindsight_details()
	{
		return $this->hasMany(\App\Models\HindsightDetail::class);
	}

	public function hindsight_shares()
	{
		return $this->hasMany(\App\Models\HindsightShare::class);
	}
}
