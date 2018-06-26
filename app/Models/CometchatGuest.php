<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatGuest
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class CometchatGuest extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
