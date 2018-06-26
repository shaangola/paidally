<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Suggestion
 * 
 * @property int $id
 * @property string $description
 * @property string $status
 * @property int $user_id_creator
 * @property \Carbon\Carbon $added_on
 * @property string $reply
 * @property int $role_id
 * @property \Carbon\Carbon $updated_on
 * @property int $like_count
 * @property int $comment_count
 * @property int $network_user
 *
 * @package App\Models
 */
class Suggestion extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id_creator' => 'int',
		'role_id' => 'int',
		'like_count' => 'int',
		'comment_count' => 'int',
		'network_user' => 'int'
	];

	protected $dates = [
		'added_on',
		'updated_on'
	];

	protected $fillable = [
		'description',
		'status',
		'user_id_creator',
		'added_on',
		'reply',
		'role_id',
		'updated_on',
		'like_count',
		'comment_count',
		'network_user'
	];
}
