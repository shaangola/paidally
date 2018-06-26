<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Faq
 * 
 * @property int $id
 * @property string $question
 * @property string $answers
 * @property \Carbon\Carbon $posted_date
 * @property int $faq_index
 * @property int $publish_status
 *
 * @package App\Models
 */
class Faq extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'faq_index' => 'int',
		'publish_status' => 'int'
	];

	protected $dates = [
		'posted_date'
	];

	protected $fillable = [
		'question',
		'answers',
		'posted_date',
		'faq_index',
		'publish_status'
	];
}
