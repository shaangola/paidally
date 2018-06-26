<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HelpTopic
 * 
 * @property int $id
 * @property string $topic
 * @property string $topic_details
 * @property string $topic_image
 * @property \Carbon\Carbon $posted_date
 * @property int $publish_status
 *
 * @package App\Models
 */
class HelpTopic extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'publish_status' => 'int'
	];

	protected $dates = [
		'posted_date'
	];

	protected $fillable = [
		'topic',
		'topic_details',
		'topic_image',
		'posted_date',
		'publish_status'
	];
}
