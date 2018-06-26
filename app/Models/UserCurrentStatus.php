<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserCurrentStatus
 * 
 * @property int $id
 * @property string $content
 *
 * @package App\Models
 */
class UserCurrentStatus extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'content'
	];
}
