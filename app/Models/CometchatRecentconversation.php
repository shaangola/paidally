<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatRecentconversation
 * 
 * @property string $convo_id
 * @property int $id
 * @property int $from
 * @property int $to
 * @property string $message
 * @property string $sent
 *
 * @package App\Models
 */
class CometchatRecentconversation extends Eloquent
{
	protected $table = 'cometchat_recentconversation';
	protected $primaryKey = 'convo_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'from' => 'int',
		'to' => 'int'
	];

	protected $fillable = [
		'id',
		'from',
		'to',
		'message',
		'sent'
	];
}
