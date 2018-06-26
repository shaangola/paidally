<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrFavouriteReport
 * 
 * @property int $id
 * @property string $user
 * @property int $authentication
 * @property int $report_id
 * @property string $url
 * 
 * @property \App\Models\MydbrReport $mydbr_report
 * @property \App\Models\MydbrUserlogin $mydbr_userlogin
 *
 * @package App\Models
 */
class MydbrFavouriteReport extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'authentication' => 'int',
		'report_id' => 'int'
	];

	protected $fillable = [
		'user',
		'authentication',
		'report_id',
		'url'
	];

	public function mydbr_report()
	{
		return $this->belongsTo(\App\Models\MydbrReport::class, 'report_id');
	}

	public function mydbr_userlogin()
	{
		return $this->belongsTo(\App\Models\MydbrUserlogin::class, 'user')
					->where('mydbr_userlogin.user', '=', 'mydbr_favourite_reports.user')
					->where('mydbr_userlogin.authentication', '=', 'mydbr_favourite_reports.authentication');
	}
}
