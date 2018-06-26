<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Inquire
 * 
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email_address
 * @property string $contact_number
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon $submission_timestamp
 * @property string $source
 * @property string $school_name
 *
 * @package App\Models
 */
class Inquire extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'submission_timestamp'
	];

	protected $fillable = [
		'name',
		'last_name',
		'email_address',
		'contact_number',
		'subject',
		'message',
		'submission_timestamp',
		'source',
		'school_name'
	];
}
