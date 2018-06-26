<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoMolecule
 * 
 * @property int $id_1
 * @property int $id_2
 *
 * @package App\Models
 */
class DemoMolecule extends Eloquent
{
	protected $table = 'demo_molecule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_1' => 'int',
		'id_2' => 'int'
	];

	protected $fillable = [
		'id_1',
		'id_2'
	];
}
