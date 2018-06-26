<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatBlock
 * 
 * @property int $id
 * @property int $fromid
 * @property int $toid
 *
 * @package App\Models
 */
class CometchatBlock extends Eloquent
{
	protected $table = 'cometchat_block';
	public $timestamps = false;

	protected $casts = [
		'fromid' => 'int',
		'toid' => 'int'
	];

	protected $fillable = [
		'fromid',
		'toid'
	];
}
