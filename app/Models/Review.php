<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Review
 * 
 * @property int $id
 * @property int $user_id
 * @property int $obj_id
 * @property string $obj_type
 * @property \Carbon\Carbon $view_date
 *
 * @package App\Models
 */
class Review extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'obj_id' => 'int'
	];

	protected $dates = [
		'view_date'
	];

	protected $fillable = [
		'user_id',
		'obj_id',
		'obj_type',
		'view_date'
	];
}
