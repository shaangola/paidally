<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrReportsPriv
 * 
 * @property int $report_id
 * @property string $username
 * @property int $group_id
 * @property int $authentication
 *
 * @package App\Models
 */
class MydbrReportsPriv extends Eloquent
{
	protected $table = 'mydbr_reports_priv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'report_id' => 'int',
		'group_id' => 'int',
		'authentication' => 'int'
	];

	protected $fillable = [
		'authentication'
	];
}
