<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrReportgroup
 * 
 * @property int $id
 * @property string $name
 * @property int $sortorder
 * @property string $color
 * 
 * @property \Illuminate\Database\Eloquent\Collection $mydbr_folders
 * @property \Illuminate\Database\Eloquent\Collection $mydbr_reports
 *
 * @package App\Models
 */
class MydbrReportgroup extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sortorder' => 'int'
	];

	protected $fillable = [
		'name',
		'sortorder',
		'color'
	];

	public function mydbr_folders()
	{
		return $this->hasMany(\App\Models\MydbrFolder::class, 'reportgroup');
	}

	public function mydbr_reports()
	{
		return $this->hasMany(\App\Models\MydbrReport::class, 'reportgroup');
	}
}
