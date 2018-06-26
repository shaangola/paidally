<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Page
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $page_created
 * @property \Carbon\Carbon $page_updated
 * @property int $status
 *
 * @package App\Models
 */
class Page extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'page_created',
		'page_updated'
	];

	protected $fillable = [
		'title',
		'description',
		'page_created',
		'page_updated',
		'status'
	];
}
