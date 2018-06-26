<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatBot
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $keywords
 * @property string $avatar
 * @property string $apikey
 *
 * @package App\Models
 */
class CometchatBot extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description',
		'keywords',
		'avatar',
		'apikey'
	];
}
