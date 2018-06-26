<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KidPopulation
 * 
 * @property int $id
 * @property int $school
 * @property int $kidpreneur
 * @property int $pitches
 * @property \Carbon\Carbon $added_on
 * @property \Carbon\Carbon $updated_on
 *
 * @package App\Models
 */
class KidPopulation extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'school' => 'int',
		'kidpreneur' => 'int',
		'pitches' => 'int'
	];

	protected $dates = [
		'added_on',
		'updated_on'
	];

	protected $fillable = [
		'school',
		'kidpreneur',
		'pitches',
		'added_on',
		'updated_on'
	];
}
