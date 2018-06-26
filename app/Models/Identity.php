<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Identity
 * 
 * @property int $id
 * @property string $title
 * @property int $user_id
 *
 * @package App\Models
 */
class Identity extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'id',
		'title',
		'user_id'
	];
}
