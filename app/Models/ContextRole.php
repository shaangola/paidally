<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContextRole
 * 
 * @property int $id
 * @property int $context_id
 * @property int $role_id
 * 
 * @property \App\Models\Context $context
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class ContextRole extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'context_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'context_id',
		'role_id'
	];

	public function context()
	{
		return $this->belongsTo(\App\Models\Context::class);
	}

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'context_role_users')
					->withPivot('id');
	}
}
