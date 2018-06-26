<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PaypalPlan
 * 
 * @property int $id
 * @property string $plan
 * @property string $plan_desc
 *
 * @package App\Models
 */
class PaypalPlan extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'plan',
		'plan_desc'
	];
}
