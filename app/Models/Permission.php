<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Permission
 * 
 * @property int $id
 * @property int $user_id
 * @property string $add
 *
 * @package App\Models
 */
class Permission extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'add'
	];
}
