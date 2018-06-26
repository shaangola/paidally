<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrSnippet
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $shortcut
 * @property int $cright
 * @property int $cdown
 *
 * @package App\Models
 */
class MydbrSnippet extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'cright' => 'int',
		'cdown' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'shortcut',
		'cright',
		'cdown'
	];
}
