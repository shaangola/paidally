<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Context
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $roles
 *
 * @package App\Models
 */
class Context extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function roles()
	{
		return $this->belongsToMany(\App\Models\Role::class, 'context_roles')
					->withPivot('id');
	}
}
