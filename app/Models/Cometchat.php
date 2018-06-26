<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cometchat
 * 
 * @property int $id
 * @property int $from
 * @property int $to
 * @property string $message
 * @property int $sent
 * @property bool $read
 * @property bool $direction
 *
 * @package App\Models
 */
class Cometchat extends Eloquent
{
	protected $table = 'cometchat';
	public $timestamps = false;

	protected $casts = [
		'from' => 'int',
		'to' => 'int',
		'sent' => 'int',
		'read' => 'bool',
		'direction' => 'bool'
	];

	protected $fillable = [
		'from',
		'to',
		'message',
		'sent',
		'read',
		'direction'
	];
}
