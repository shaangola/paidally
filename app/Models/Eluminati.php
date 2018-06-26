<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Eluminati
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $title
 * @property string $image_url
 * @property string $short_description
 * @property string $executive_summary
 * @property string $eluminati_badge
 * @property string $testimonial
 * @property int $user_id_creator
 * @property int $stage_id
 * @property int $decision_type_id
 * @property \Carbon\Carbon $creation_timestamp
 * @property \Carbon\Carbon $updation_timestamp
 * @property int $status
 *
 * @package App\Models
 */
class Eluminati extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id_creator' => 'int',
		'stage_id' => 'int',
		'decision_type_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'creation_timestamp',
		'updation_timestamp'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'title',
		'image_url',
		'short_description',
		'executive_summary',
		'eluminati_badge',
		'testimonial',
		'user_id_creator',
		'stage_id',
		'decision_type_id',
		'creation_timestamp',
		'updation_timestamp',
		'status'
	];
}
