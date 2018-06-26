<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrGroup
 * 
 * @property int $group_id
 * @property string $name
 *
 * @package App\Models
 */
class MydbrGroup extends Eloquent
{
	protected $primaryKey = 'group_id';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
