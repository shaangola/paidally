<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AdviceShare
 * 
 * @property int $id
 * @property int $advice_id
 * @property string $message
 * @property int $context_role_user_id
 * @property \Carbon\Carbon $share_date
 * @property string $network
 * 
 * @property \App\Models\AdvicesLatest $advices_latest
 * @property \App\Models\ContextRoleUser $context_role_user
 *
 * @package App\Models
 */
class AdviceShare extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'advice_id' => 'int',
		'context_role_user_id' => 'int'
	];

	protected $dates = [
		'share_date'
	];

	protected $fillable = [
		'advice_id',
		'message',
		'context_role_user_id',
		'share_date',
		'network'
	];

	public function advices_latest()
	{
		return $this->belongsTo(\App\Models\AdvicesLatest::class, 'advice_id');
	}

	public function context_role_user()
	{
		return $this->belongsTo(\App\Models\ContextRoleUser::class);
	}
}
