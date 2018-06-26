<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoOemCluster
 * 
 * @property int $id
 * @property string $oem
 * @property string $cluster
 * @property int $year
 *
 * @package App\Models
 */
class DemoOemCluster extends Eloquent
{
	protected $table = 'demo_oem_cluster';
	public $timestamps = false;

	protected $casts = [
		'year' => 'int'
	];

	protected $fillable = [
		'oem',
		'cluster',
		'year'
	];
}
