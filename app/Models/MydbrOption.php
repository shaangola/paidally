<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrOption
 * 
 * @property string $user
 * @property int $authentication
 * @property string $name
 * @property string $value
 *
 * @package App\Models
 */
class MydbrOption extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authentication' => 'int'
	];

	protected $fillable = [
		'value'
	];
}
