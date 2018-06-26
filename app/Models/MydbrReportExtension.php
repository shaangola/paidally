<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrReportExtension
 * 
 * @property string $proc_name
 * @property string $extension
 *
 * @package App\Models
 */
class MydbrReportExtension extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
}
