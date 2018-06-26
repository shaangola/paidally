<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrLog
 * 
 * @property int $id
 * @property string $user
 * @property \Carbon\Carbon $log_time
 * @property string $log_ip
 * @property string $log_title
 * @property string $log_message
 *
 * @package App\Models
 */
class MydbrLog extends Eloquent
{
	protected $table = 'mydbr_log';
	public $timestamps = false;

	protected $dates = [
		'log_time'
	];

	protected $fillable = [
		'user',
		'log_time',
		'log_ip',
		'log_title',
		'log_message'
	];
}
