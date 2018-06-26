<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property int $account_id
 * @property string $executive_summary
 * @property string $expertise_detail
 * @property string $short_bio
 * @property string $city
 * @property string $designation
 * @property \Carbon\Carbon $updation_timestamp
 * @property int $user_profile_view_status
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserProfile extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'account_id' => 'int',
		'user_profile_view_status' => 'int'
	];

	protected $dates = [
		'updation_timestamp'
	];

	protected $fillable = [
		'user_id',
		'account_id',
		'executive_summary',
		'expertise_detail',
		'short_bio',
		'city',
		'designation',
		'updation_timestamp',
		'user_profile_view_status'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
