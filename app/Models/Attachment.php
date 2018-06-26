<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Attachment
 * 
 * @property int $id
 * @property int $obj_id
 * @property string $obj_type
 * @property string $file_type
 * @property string $file_name
 * @property string $image_url
 *
 * @package App\Models
 */
class Attachment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'obj_id' => 'int'
	];

	protected $fillable = [
		'obj_id',
		'obj_type',
		'file_type',
		'file_name',
		'image_url'
	];
}
