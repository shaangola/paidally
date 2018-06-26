<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoCountry
 * 
 * @property string $Code
 * @property string $Name
 * @property string $Continent
 * @property string $Region
 * @property float $SurfaceArea
 * @property int $IndepYear
 * @property int $Population
 * @property float $LifeExpectancy
 * @property float $GNP
 * @property float $GNPOld
 * @property string $LocalName
 * @property string $GovernmentForm
 * @property string $HeadOfState
 * @property int $Capital
 * @property string $Code2
 *
 * @package App\Models
 */
class DemoCountry extends Eloquent
{
	protected $table = 'demo_country';
	protected $primaryKey = 'Code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SurfaceArea' => 'float',
		'IndepYear' => 'int',
		'Population' => 'int',
		'LifeExpectancy' => 'float',
		'GNP' => 'float',
		'GNPOld' => 'float',
		'Capital' => 'int'
	];

	protected $fillable = [
		'Name',
		'Continent',
		'Region',
		'SurfaceArea',
		'IndepYear',
		'Population',
		'LifeExpectancy',
		'GNP',
		'GNPOld',
		'LocalName',
		'GovernmentForm',
		'HeadOfState',
		'Capital',
		'Code2'
	];
}
