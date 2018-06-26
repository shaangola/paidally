<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrReport
 * 
 * @property int $report_id
 * @property string $name
 * @property string $proc_name
 * @property int $folder_id
 * @property string $explanation
 * @property int $reportgroup
 * @property int $sortorder
 * @property string $runreport
 * @property int $autoexecute
 * @property string $parameter_help
 * @property string $export
 * 
 * @property \App\Models\MydbrReportgroup $mydbr_reportgroup
 * @property \Illuminate\Database\Eloquent\Collection $mydbr_favourite_reports
 *
 * @package App\Models
 */
class MydbrReport extends Eloquent
{
	protected $primaryKey = 'report_id';
	public $timestamps = false;

	protected $casts = [
		'folder_id' => 'int',
		'reportgroup' => 'int',
		'sortorder' => 'int',
		'autoexecute' => 'int'
	];

	protected $fillable = [
		'name',
		'proc_name',
		'folder_id',
		'explanation',
		'reportgroup',
		'sortorder',
		'runreport',
		'autoexecute',
		'parameter_help',
		'export'
	];

	public function mydbr_reportgroup()
	{
		return $this->belongsTo(\App\Models\MydbrReportgroup::class, 'reportgroup');
	}

	public function mydbr_favourite_reports()
	{
		return $this->hasMany(\App\Models\MydbrFavouriteReport::class, 'report_id');
	}
}
