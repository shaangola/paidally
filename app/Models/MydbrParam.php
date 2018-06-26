<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrParam
 * 
 * @property string $proc_name
 * @property string $param
 * @property string $query_name
 * @property string $title
 * @property string $default_value
 * @property int $optional
 * @property int $only_default
 * @property string $suffix
 * @property string $options
 *
 * @package App\Models
 */
class MydbrParam extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'optional' => 'int',
		'only_default' => 'int'
	];

	protected $fillable = [
		'query_name',
		'title',
		'default_value',
		'optional',
		'only_default',
		'suffix',
		'options'
	];
}
