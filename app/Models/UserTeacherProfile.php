<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserTeacherProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property string $teacher_password
 * @property string $best_time_to_contact
 * @property string $state
 * @property int $no_of_student_participate
 * @property string $year_group
 * @property string $job_title
 * @property string $taking_challenge
 * @property string $pitch_competiotion
 * @property int $kidpreneur_programs
 * @property int $entrepreneurship_programs
 * @property string $club_kidpreneur
 * @property string $message
 * @property int $terms_condition
 * @property string $payment_status
 * @property string $payment_type
 * @property string $organization
 * @property string $billing_address
 * @property string $suburb
 * @property string $postcode
 * @property string $kits_to_receive
 * @property string $phone
 * @property int $class_number
 * @property int $educator_number
 * @property string $deliver_program
 * @property string $kid_dashboard_permission
 * @property int $identity_id
 * @property int $plan
 * @property string $kbn_number
 * @property \Carbon\Carbon $birth_date
 *
 * @package App\Models
 */
class UserTeacherProfile extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'no_of_student_participate' => 'int',
		'kidpreneur_programs' => 'int',
		'entrepreneurship_programs' => 'int',
		'terms_condition' => 'int',
		'class_number' => 'int',
		'educator_number' => 'int',
		'identity_id' => 'int',
		'plan' => 'int'
	];

	protected $dates = [
		'birth_date'
	];

	protected $hidden = [
		'teacher_password'
	];

	protected $fillable = [
		'user_id',
		'teacher_password',
		'best_time_to_contact',
		'state',
		'no_of_student_participate',
		'year_group',
		'job_title',
		'taking_challenge',
		'pitch_competiotion',
		'kidpreneur_programs',
		'entrepreneurship_programs',
		'club_kidpreneur',
		'message',
		'terms_condition',
		'payment_status',
		'payment_type',
		'organization',
		'billing_address',
		'suburb',
		'postcode',
		'kits_to_receive',
		'phone',
		'class_number',
		'educator_number',
		'deliver_program',
		'kid_dashboard_permission',
		'identity_id',
		'plan',
		'kbn_number',
		'birth_date'
	];
}
