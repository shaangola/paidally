<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RemoteAddress
 * 
 * @property int $id
 * @property string $remote_address
 * @property int $counter
 * @property \Carbon\Carbon $created
 *
 * @package App\Models
 */
class RemoteAddress extends Eloquent
{
	protected $table = 'remote_address';
	public $timestamps = false;

	protected $casts = [
		'counter' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'remote_address',
		'counter',
		'created'
	];
}
