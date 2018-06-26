<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoOemPlatform
 * 
 * @property string $oem
 * @property string $platform
 * @property int $year
 *
 * @package App\Models
 */
class DemoOemPlatform extends Eloquent
{
	protected $table = 'demo_oem_platform';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'year' => 'int'
	];
}
