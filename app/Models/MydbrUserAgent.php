<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrUserAgent
 * 
 * @property string $hash
 * @property string $user_agent
 *
 * @package App\Models
 */
class MydbrUserAgent extends Eloquent
{
	protected $primaryKey = 'hash';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'user_agent'
	];
}
