<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EntropolisGuideline
 * 
 * @property int $id
 * @property string $guideline
 * @property int $role_id
 *
 * @package App\Models
 */
class EntropolisGuideline extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int'
	];

	protected $fillable = [
		'guideline',
		'role_id'
	];
}
