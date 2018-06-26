<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pipeline
 * 
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property int $country
 * @property string $intrested_in
 * @property string $school
 * @property string $form_id
 * @property \Carbon\Carbon $created_on
 *
 * @package App\Models
 */
class Pipeline extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'country' => 'int'
	];

	protected $dates = [
		'created_on'
	];

	protected $fillable = [
		'full_name',
		'email',
		'country',
		'intrested_in',
		'school',
		'form_id',
		'created_on'
	];
}
