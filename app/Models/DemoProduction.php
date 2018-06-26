<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DemoProduction
 * 
 * @property int $SupplierID
 * @property string $Name
 * @property \Carbon\Carbon $InsertDate
 * @property float $Items
 * @property float $Weight
 * @property float $ItemsSold
 * @property int $ItemID
 *
 * @package App\Models
 */
class DemoProduction extends Eloquent
{
	protected $table = 'demo_production';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SupplierID' => 'int',
		'Items' => 'float',
		'Weight' => 'float',
		'ItemsSold' => 'float',
		'ItemID' => 'int'
	];

	protected $dates = [
		'InsertDate'
	];

	protected $fillable = [
		'Name',
		'Items',
		'Weight',
		'ItemsSold'
	];
}
