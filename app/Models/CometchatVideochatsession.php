<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatVideochatsession
 * 
 * @property string $username
 * @property string $identity
 * @property int $timestamp
 *
 * @package App\Models
 */
class CometchatVideochatsession extends Eloquent
{
	protected $primaryKey = 'username';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'timestamp' => 'int'
	];

	protected $fillable = [
		'identity',
		'timestamp'
	];
}
