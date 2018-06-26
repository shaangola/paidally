<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupCode
 * 
 * @property int $id
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property string $name
 * @property \Carbon\Carbon $created
 * @property string $parent_name
 *
 * @package App\Models
 */
class GroupCode extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'lft' => 'int',
		'rght' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'parent_id',
		'lft',
		'rght',
		'name',
		'created',
		'parent_name'
	];
}
