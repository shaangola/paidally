<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TeacherToolkit
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $parent_id
 * @property string $short_description
 * @property string $description
 * @property string $type
 * @property string $extension
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $last_modified_date
 * @property int $added_by
 * @property bool $status
 *
 * @package App\Models
 */
class TeacherToolkit extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'added_by' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created_date',
		'last_modified_date'
	];

	protected $fillable = [
		'name',
		'title',
		'parent_id',
		'short_description',
		'description',
		'type',
		'extension',
		'created_date',
		'last_modified_date',
		'added_by',
		'status'
	];
}
