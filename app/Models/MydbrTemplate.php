<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrTemplate
 * 
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $row
 * @property string $footer
 * @property int $folder_id
 * @property \Carbon\Carbon $creation_date
 *
 * @package App\Models
 */
class MydbrTemplate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'folder_id' => 'int'
	];

	protected $dates = [
		'creation_date'
	];

	protected $fillable = [
		'name',
		'header',
		'row',
		'footer',
		'folder_id',
		'creation_date'
	];
}
