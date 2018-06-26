<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrTemplateFolder
 * 
 * @property int $id
 * @property string $name
 * @property int $parent_id
 *
 * @package App\Models
 */
class MydbrTemplateFolder extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'parent_id'
	];
}
