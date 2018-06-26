<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $country_code
 * @property string $iso3
 * @property string $fips
 * @property string $country_title
 * @property string $continent
 * @property string $currency_code
 * @property string $currency_name
 * @property string $phone_prefix
 * @property string $postal_code
 * @property string $languages
 * @property string $geonameid
 * @property int $sequence
 *
 * @package App\Models
 */
class Country extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sequence' => 'int'
	];

	protected $fillable = [
		'country_code',
		'iso3',
		'fips',
		'country_title',
		'continent',
		'currency_code',
		'currency_name',
		'phone_prefix',
		'postal_code',
		'languages',
		'geonameid',
		'sequence'
	];
}
