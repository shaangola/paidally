<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoCorporate
 * 
 * @property string $main
 * @property string $sub
 *
 * @package App\Models
 */
class DemoCorporate extends Eloquent
{
	protected $table = 'demo_corporate';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'main',
		'sub'
	];
}
