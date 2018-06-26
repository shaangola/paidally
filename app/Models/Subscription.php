<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Subscription
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $code
 * @property \Carbon\Carbon $start_date
 *
 * @package App\Models
 */
class Subscription extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'start_date'
	];

	protected $fillable = [
		'title',
		'description',
		'code',
		'start_date'
	];
}
