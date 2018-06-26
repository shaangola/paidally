<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Library
 * 
 * @property int $id
 * @property string $object_type
 * @property int $object_id
 * @property int $user_id_viewer
 * @property \Carbon\Carbon $created_timestamp
 * @property string $title
 * @property int $decision_type_id
 * @property int $category_id
 * @property int $owner_user_id
 * @property int $owner_view_status
 * @property \Carbon\Carbon $updated_timestamp
 * @property int $draft
 * @property int $blog_status
 * @property int $delete_notification
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Library extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'object_id' => 'int',
		'user_id_viewer' => 'int',
		'decision_type_id' => 'int',
		'category_id' => 'int',
		'owner_user_id' => 'int',
		'owner_view_status' => 'int',
		'draft' => 'int',
		'blog_status' => 'int',
		'delete_notification' => 'int'
	];

	protected $dates = [
		'created_timestamp',
		'updated_timestamp'
	];

	protected $fillable = [
		'object_type',
		'object_id',
		'user_id_viewer',
		'created_timestamp',
		'title',
		'decision_type_id',
		'category_id',
		'owner_user_id',
		'owner_view_status',
		'updated_timestamp',
		'draft',
		'blog_status',
		'delete_notification'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'user_id_viewer');
	}
}
