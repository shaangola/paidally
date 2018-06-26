<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoAtom
 * 
 * @property int $id
 * @property string $color
 *
 * @package App\Models
 */
class DemoAtom extends Eloquent
{
	protected $table = 'demo_atom';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'color'
	];
}
