<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrStatistic
 * 
 * @property string $proc_name
 * @property string $username
 * @property int $authentication
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property string $query
 * @property string $ip_address
 * @property string $user_agent_hash
 * @property int $id
 *
 * @package App\Models
 */
class MydbrStatistic extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'authentication' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'proc_name',
		'username',
		'authentication',
		'start_time',
		'end_time',
		'query',
		'ip_address',
		'user_agent_hash'
	];
}
