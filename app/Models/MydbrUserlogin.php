<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrUserlogin
 * 
 * @property string $user
 * @property string $password
 * @property string $name
 * @property int $admin
 * @property \Carbon\Carbon $passworddate
 * @property string $email
 * @property string $telephone
 * @property int $authentication
 * @property int $ask_pw_change
 * 
 * @property \Illuminate\Database\Eloquent\Collection $mydbr_favourite_reports
 *
 * @package App\Models
 */
class MydbrUserlogin extends Eloquent
{
	protected $table = 'mydbr_userlogin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'admin' => 'int',
		'authentication' => 'int',
		'ask_pw_change' => 'int'
	];

	protected $dates = [
		'passworddate'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'password',
		'name',
		'admin',
		'passworddate',
		'email',
		'telephone',
		'ask_pw_change'
	];

	public function mydbr_favourite_reports()
	{
		return $this->hasMany(\App\Models\MydbrFavouriteReport::class, 'user');
	}
}
