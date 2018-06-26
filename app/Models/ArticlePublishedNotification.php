<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ArticlePublishedNotification
 * 
 * @property int $id
 * @property int $owner_user_id
 * @property int $user_id
 * @property int $object_id
 * @property string $object_type
 * @property \Carbon\Carbon $creation_timestamp
 * @property int $view_status
 * @property int $delete_notification
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class ArticlePublishedNotification extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'owner_user_id' => 'int',
		'user_id' => 'int',
		'object_id' => 'int',
		'view_status' => 'int',
		'delete_notification' => 'int'
	];

	protected $dates = [
		'creation_timestamp'
	];

	protected $fillable = [
		'owner_user_id',
		'user_id',
		'object_id',
		'object_type',
		'creation_timestamp',
		'view_status',
		'delete_notification'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
