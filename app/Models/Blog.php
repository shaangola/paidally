<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Blog
 * 
 * @property int $id
 * @property string $blog_type
 * @property int $object_id
 * @property string $object_type
 * @property int $draft
 * @property int $user_id_creator
 * @property int $status
 * @property \Carbon\Carbon $creation_timestamp
 *
 * @package App\Models
 */
class Blog extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'object_id' => 'int',
		'draft' => 'int',
		'user_id_creator' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'blog_type',
		'object_id',
		'object_type',
		'draft',
		'user_id_creator',
		'status',
		'creation_timestamp'
	];
}
