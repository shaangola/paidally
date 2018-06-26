<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrLocalization
 * 
 * @property string $lang_locale
 * @property string $keyword
 * @property string $translation
 * @property \Carbon\Carbon $creation_date
 * 
 * @property \App\Models\MydbrLanguage $mydbr_language
 *
 * @package App\Models
 */
class MydbrLocalization extends Eloquent
{
	protected $table = 'mydbr_localization';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'creation_date'
	];

	protected $fillable = [
		'translation',
		'creation_date'
	];

	public function mydbr_language()
	{
		return $this->belongsTo(\App\Models\MydbrLanguage::class, 'lang_locale');
	}
}
