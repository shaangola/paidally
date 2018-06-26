<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrFolder
 * 
 * @property int $folder_id
 * @property int $mother_id
 * @property string $name
 * @property int $invisible
 * @property int $reportgroup
 * @property string $explanation
 * 
 * @property \App\Models\MydbrReportgroup $mydbr_reportgroup
 *
 * @package App\Models
 */
class MydbrFolder extends Eloquent
{
	protected $primaryKey = 'folder_id';
	public $timestamps = false;

	protected $casts = [
		'mother_id' => 'int',
		'invisible' => 'int',
		'reportgroup' => 'int'
	];

	protected $fillable = [
		'mother_id',
		'name',
		'invisible',
		'reportgroup',
		'explanation'
	];

	public function mydbr_reportgroup()
	{
		return $this->belongsTo(\App\Models\MydbrReportgroup::class, 'reportgroup');
	}
}
