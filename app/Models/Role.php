<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $role
 * 
 * @property \Illuminate\Database\Eloquent\Collection $contexts
 *
 * @package App\Models
 */
class Role extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'role'
	];

	public function contexts()
	{
		return $this->belongsToMany(\App\Models\Context::class, 'context_roles')
					->withPivot('id');
	}
}
