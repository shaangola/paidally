<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PitchGoldenEntryForm
 * 
 * @property int $id
 * @property string $school_name
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property int $phone
 * @property string $state
 * @property int $entrepreneurship_education
 * @property string $role_id
 * @property string $teacher_school
 * @property string $teacher_full_name
 * @property string $teacher_email_address
 * @property string $teacher_role
 * @property string $pitch
 * @property string $bussiness_name
 * @property string $problem_solving
 * @property string $bussiness_description
 * @property string $revenue
 * @property string $profit_loss
 * @property int $donate_money
 * @property string $donation
 * @property string $how_to_kidreprenuer
 * @property string $rating
 * @property string $intend_for_bussiness
 * @property string $start_another_business
 * @property int $subscribe
 * @property int $kidpreneur_no
 * @property string $session_id
 * @property int $status
 * @property bool $video_upload
 * @property string $video_id
 * @property \Carbon\Carbon $registration_date
 *
 * @package App\Models
 */
class PitchGoldenEntryForm extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'phone' => 'int',
		'entrepreneurship_education' => 'int',
		'donate_money' => 'int',
		'subscribe' => 'int',
		'kidpreneur_no' => 'int',
		'status' => 'int',
		'video_upload' => 'bool'
	];

	protected $dates = [
		'registration_date'
	];

	protected $fillable = [
		'school_name',
		'first_name',
		'last_name',
		'email_address',
		'phone',
		'state',
		'entrepreneurship_education',
		'role_id',
		'teacher_school',
		'teacher_full_name',
		'teacher_email_address',
		'teacher_role',
		'pitch',
		'bussiness_name',
		'problem_solving',
		'bussiness_description',
		'revenue',
		'profit_loss',
		'donate_money',
		'donation',
		'how_to_kidreprenuer',
		'rating',
		'intend_for_bussiness',
		'start_another_business',
		'subscribe',
		'kidpreneur_no',
		'session_id',
		'status',
		'video_upload',
		'video_id',
		'registration_date'
	];
}
