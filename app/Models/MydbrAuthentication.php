<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrAuthentication
 * 
 * @property string $module
 * @property int $mask
 * @property string $name
 *
 * @package App\Models
 */
class MydbrAuthentication extends Eloquent
{
	protected $table = 'mydbr_authentication';
	protected $primaryKey = 'module';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'mask' => 'int'
	];

	protected $fillable = [
		'mask',
		'name'
	];
}
