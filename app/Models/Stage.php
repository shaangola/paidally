<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Stage
 * 
 * @property int $id
 * @property string $stage_title
 * @property int $parent_id
 *
 * @package App\Models
 */
class Stage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'stage_title',
		'parent_id'
	];
}
