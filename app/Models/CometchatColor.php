<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatColor
 * 
 * @property string $color_key
 * @property string $color_value
 * @property string $color
 *
 * @package App\Models
 */
class CometchatColor extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'color_value'
	];
}
