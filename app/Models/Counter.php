<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Counter
 * 
 * @property int $id
 * @property string $remote_address
 * @property int $counter
 * @property \Carbon\Carbon $created_on
 *
 * @package App\Models
 */
class Counter extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'counter' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'remote_address',
		'counter',
		'created_on'
	];
}
