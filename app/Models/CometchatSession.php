<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatSession
 * 
 * @property string $session_id
 * @property string $session_data
 * @property \Carbon\Carbon $session_lastaccesstime
 *
 * @package App\Models
 */
class CometchatSession extends Eloquent
{
	protected $table = 'cometchat_session';
	protected $primaryKey = 'session_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'session_lastaccesstime'
	];

	protected $fillable = [
		'session_data',
		'session_lastaccesstime'
	];
}
