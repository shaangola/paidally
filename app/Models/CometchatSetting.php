<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatSetting
 * 
 * @property string $setting_key
 * @property string $value
 * @property int $key_type
 *
 * @package App\Models
 */
class CometchatSetting extends Eloquent
{
	protected $primaryKey = 'setting_key';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'key_type' => 'int'
	];

	protected $fillable = [
		'value',
		'key_type'
	];
}
