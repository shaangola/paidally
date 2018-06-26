<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoPlatformTech
 * 
 * @property string $platform
 * @property string $tech
 * @property int $year
 *
 * @package App\Models
 */
class DemoPlatformTech extends Eloquent
{
	protected $table = 'demo_platform_tech';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'year' => 'int'
	];

	protected $fillable = [
		'year'
	];
}
