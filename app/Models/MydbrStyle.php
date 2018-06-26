<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrStyle
 * 
 * @property string $name
 * @property int $colstyle
 * @property string $definition
 *
 * @package App\Models
 */
class MydbrStyle extends Eloquent
{
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'colstyle' => 'int'
	];

	protected $fillable = [
		'colstyle',
		'definition'
	];
}
