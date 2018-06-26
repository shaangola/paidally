<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrParamQuery
 * 
 * @property string $name
 * @property string $query
 * @property int $coltype
 * @property string $options
 *
 * @package App\Models
 */
class MydbrParamQuery extends Eloquent
{
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coltype' => 'int'
	];

	protected $fillable = [
		'query',
		'coltype',
		'options'
	];
}
