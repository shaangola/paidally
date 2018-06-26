<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class State
 * 
 * @property int $id
 * @property string $state_code
 * @property string $state_name
 *
 * @package App\Models
 */
class State extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'state_code',
		'state_name'
	];
}
