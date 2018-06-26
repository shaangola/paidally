<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrUpdate
 * 
 * @property string $latest_version
 * @property int $next_check
 * @property string $download_link
 * @property string $info_link
 * @property int $last_successful_check
 * @property string $signature
 *
 * @package App\Models
 */
class MydbrUpdate extends Eloquent
{
	protected $table = 'mydbr_update';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'next_check' => 'int',
		'last_successful_check' => 'int'
	];

	protected $fillable = [
		'latest_version',
		'next_check',
		'download_link',
		'info_link',
		'last_successful_check',
		'signature'
	];
}
