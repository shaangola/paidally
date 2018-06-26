<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProjectChangeStatusLog
 * 
 * @property int $id
 * @property int $project_id
 * @property string $status
 * @property string $comment
 * @property \Carbon\Carbon $timestamp
 * @property int $user_id
 *
 * @package App\Models
 */
class ProjectChangeStatusLog extends Eloquent
{
	protected $table = 'project_change_status_log';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'project_id',
		'status',
		'comment',
		'timestamp',
		'user_id'
	];
}
