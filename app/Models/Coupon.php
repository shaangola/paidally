<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Coupon
 * 
 * @property int $id
 * @property string $user_email
 * @property string $coupon_code
 * @property bool $is_applied
 * @property \Carbon\Carbon $created_date
 *
 * @package App\Models
 */
class Coupon extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'is_applied' => 'bool'
	];

	protected $dates = [
		'created_date'
	];

	protected $fillable = [
		'user_email',
		'coupon_code',
		'is_applied',
		'created_date'
	];
}
