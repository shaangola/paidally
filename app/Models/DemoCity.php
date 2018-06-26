<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoCity
 * 
 * @property int $ID
 * @property string $Name
 * @property string $CountryCode
 * @property string $District
 * @property int $Population
 *
 * @package App\Models
 */
class DemoCity extends Eloquent
{
	protected $table = 'demo_city';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'Population' => 'int'
	];

	protected $fillable = [
		'Name',
		'CountryCode',
		'District',
		'Population'
	];
}
