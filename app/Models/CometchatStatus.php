<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatStatus
 * 
 * @property int $userid
 * @property string $message
 * @property string $status
 * @property int $typingto
 * @property int $typingtime
 * @property int $isdevice
 * @property int $lastactivity
 * @property int $lastseen
 * @property int $lastseensetting
 * @property int $readreceiptsetting
 *
 * @package App\Models
 */
class CometchatStatus extends Eloquent
{
	protected $table = 'cometchat_status';
	protected $primaryKey = 'userid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'typingto' => 'int',
		'typingtime' => 'int',
		'isdevice' => 'int',
		'lastactivity' => 'int',
		'lastseen' => 'int',
		'lastseensetting' => 'int',
		'readreceiptsetting' => 'int'
	];

	protected $fillable = [
		'message',
		'status',
		'typingto',
		'typingtime',
		'isdevice',
		'lastactivity',
		'lastseen',
		'lastseensetting',
		'readreceiptsetting'
	];
}
