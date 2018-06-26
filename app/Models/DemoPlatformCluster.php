<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoPlatformCluster
 * 
 * @property int $id
 * @property string $platform
 * @property string $cluster
 * @property int $year
 *
 * @package App\Models
 */
class DemoPlatformCluster extends Eloquent
{
	protected $table = 'demo_platform_cluster';
	public $timestamps = false;

	protected $casts = [
		'year' => 'int'
	];

	protected $fillable = [
		'platform',
		'cluster',
		'year'
	];
}
