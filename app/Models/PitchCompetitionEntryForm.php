<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PitchCompetitionEntryForm
 * 
 * @property int $id
 * @property string $school_name
 * @property string $address
 * @property string $kbn
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property int $phone
 * @property string $role_id
 * @property string $teacher_full_name
 * @property string $teacher_email_address
 * @property int $teacher_phone
 * @property string $kidprenuer_term
 * @property string $how_to_deliver
 * @property string $bussiness_name
 * @property string $problem_solving
 * @property string $bussiness_description
 * @property int $support_from_anyone
 * @property string $revenue
 * @property string $profit_loss
 * @property string $any_charity
 * @property string $donation
 * @property string $rating
 * @property string $intend_for_bussiness
 * @property int $kidpreneur_no
 * @property string $session_id
 * @property int $status
 * @property bool $video_upload
 * @property string $video_id
 * @property \Carbon\Carbon $registration_date
 * 
 * @property \Illuminate\Database\Eloquent\Collection $kcpc_students
 *
 * @package App\Models
 */
class PitchCompetitionEntryForm extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'phone' => 'int',
		'teacher_phone' => 'int',
		'support_from_anyone' => 'int',
		'kidpreneur_no' => 'int',
		'status' => 'int',
		'video_upload' => 'bool'
	];

	protected $dates = [
		'registration_date'
	];

	protected $fillable = [
		'school_name',
		'address',
		'kbn',
		'first_name',
		'last_name',
		'email_address',
		'phone',
		'role_id',
		'teacher_full_name',
		'teacher_email_address',
		'teacher_phone',
		'kidprenuer_term',
		'how_to_deliver',
		'bussiness_name',
		'problem_solving',
		'bussiness_description',
		'support_from_anyone',
		'revenue',
		'profit_loss',
		'any_charity',
		'donation',
		'rating',
		'intend_for_bussiness',
		'kidpreneur_no',
		'session_id',
		'status',
		'video_upload',
		'video_id',
		'registration_date'
	];

	public function kcpc_students()
	{
		return $this->hasMany(\App\Models\KcpcStudent::class);
	}
}
