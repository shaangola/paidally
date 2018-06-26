<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserEntropolisGuideline
 * 
 * @property int $id
 * @property int $user_id
 * @property int $entropolis_guideline_id
 * @property string $option_value
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserEntropolisGuideline extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'entropolis_guideline_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'entropolis_guideline_id',
		'option_value'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
