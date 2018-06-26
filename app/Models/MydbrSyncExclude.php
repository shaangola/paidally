<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrSyncExclude
 * 
 * @property string $username
 * @property int $authentication
 * @property string $proc_name
 * @property string $type
 *
 * @package App\Models
 */
class MydbrSyncExclude extends Eloquent
{
	protected $table = 'mydbr_sync_exclude';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authentication' => 'int'
	];

	protected $fillable = [
		'type'
	];
}
