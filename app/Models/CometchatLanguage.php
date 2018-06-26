<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatLanguage
 * 
 * @property string $lang_key
 * @property string $lang_text
 * @property string $code
 * @property string $type
 * @property string $name
 *
 * @package App\Models
 */
class CometchatLanguage extends Eloquent
{
	protected $primaryKey = 'lang_key(50';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'lang_key',
		'lang_text',
		'code',
		'type',
		'name'
	];
}
