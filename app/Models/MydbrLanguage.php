<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrLanguage
 * 
 * @property string $lang_locale
 * @property string $language
 * @property string $date_format
 * @property string $time_format
 * @property string $thousand_separator
 * @property string $decimal_separator
 * 
 * @property \Illuminate\Database\Eloquent\Collection $mydbr_localizations
 *
 * @package App\Models
 */
class MydbrLanguage extends Eloquent
{
	protected $primaryKey = 'lang_locale';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'language',
		'date_format',
		'time_format',
		'thousand_separator',
		'decimal_separator'
	];

	public function mydbr_localizations()
	{
		return $this->hasMany(\App\Models\MydbrLocalization::class, 'lang_locale');
	}
}
