<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatAnnouncement
 * 
 * @property int $id
 * @property string $announcement
 * @property int $time
 * @property int $to
 * @property int $recd
 *
 * @package App\Models
 */
class CometchatAnnouncement extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'time' => 'int',
		'to' => 'int',
		'recd' => 'int'
	];

	protected $fillable = [
		'announcement',
		'time',
		'to',
		'recd'
	];
}
