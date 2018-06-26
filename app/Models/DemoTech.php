<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoTech
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class DemoTech extends Eloquent
{
	protected $table = 'demo_tech';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
