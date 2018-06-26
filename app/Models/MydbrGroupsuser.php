<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrGroupsuser
 * 
 * @property int $group_id
 * @property string $user
 * @property int $authentication
 *
 * @package App\Models
 */
class MydbrGroupsuser extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'authentication' => 'int'
	];
}
