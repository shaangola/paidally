<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HindsightShare
 * 
 * @property int $id
 * @property int $hindsight_id
 * @property string $message
 * @property int $context_role_user_id
 * @property \Carbon\Carbon $share_date
 * @property string $network
 * 
 * @property \App\Models\Hindsight $hindsight
 * @property \App\Models\ContextRoleUser $context_role_user
 *
 * @package App\Models
 */
class HindsightShare extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'hindsight_id' => 'int',
		'context_role_user_id' => 'int'
	];

	protected $dates = [
		'share_date'
	];

	protected $fillable = [
		'hindsight_id',
		'message',
		'context_role_user_id',
		'share_date',
		'network'
	];

	public function hindsight()
	{
		return $this->belongsTo(\App\Models\Hindsight::class);
	}

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class);
	}
}
