<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrKeyColumnUsage
 * 
 * @property string $table_schema
 * @property string $table_name
 * @property string $column_name
 * @property string $referenced_table_schema
 * @property string $referenced_table_name
 * @property string $referenced_column_name
 *
 * @package App\Models
 */
class MydbrKeyColumnUsage extends Eloquent
{
	protected $table = 'mydbr_key_column_usage';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'referenced_table_schema',
		'referenced_table_name',
		'referenced_column_name'
	];
}
