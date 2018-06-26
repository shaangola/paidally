<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Stages1
 * 
 * @property int $id
 * @property string $stage_title
 * @property int $parent_id
 *
 * @package App\Models
 */
class Stages1 extends Eloquent
{
	protected $table = 'stages1';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'stage_title',
		'parent_id'
	];
}
