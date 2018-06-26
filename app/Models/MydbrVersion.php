<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrVersion
 * 
 * @property string $version
 *
 * @package App\Models
 */
class MydbrVersion extends Eloquent
{
	protected $table = 'mydbr_version';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'version'
	];
}
