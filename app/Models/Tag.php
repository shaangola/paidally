<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $tag_name
 *
 * @package App\Models
 */
class Tag extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'tag_name'
	];
}
