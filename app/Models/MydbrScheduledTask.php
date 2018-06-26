<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrScheduledTask
 * 
 * @property int $id
 * @property string $description
 * @property string $url
 * @property string $timing
 * @property \Carbon\Carbon $last_run
 * @property int $disabled
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class MydbrScheduledTask extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'disabled' => 'int'
	];

	protected $dates = [
		'last_run'
	];

	protected $fillable = [
		'description',
		'url',
		'timing',
		'last_run',
		'disabled'
	];
}
