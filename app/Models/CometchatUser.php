<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CometchatUser
 * 
 * @property int $userid
 * @property string $username
 * @property string $displayname
 * @property string $password
 * @property string $avatar
 * @property string $link
 * @property string $grp
 * @property string $friends
 * @property string $uid
 * @property string $roleid
 * @property string $role
 *
 * @package App\Models
 */
class CometchatUser extends Eloquent
{
	protected $primaryKey = 'userid';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'displayname',
		'password',
		'avatar',
		'link',
		'grp',
		'friends',
		'uid',
		'roleid',
		'role'
	];
}
