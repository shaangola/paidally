<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StudentsRen
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar_name
 * @property string $password
 * @property string $promotional_code
 * @property string $school_name
 * @property string $teacher_name
 * @property string $teacher_email
 * @property \Carbon\Carbon $registration_date
 * @property int $registered_by
 * @property bool $delete_flag
 * @property string $student_grade
 * @property int $student_age
 * @property int $student_gender
 * @property int $is_australian
 * @property int $parental_const
 *
 * @package App\Models
 */
class StudentsRen extends Eloquent
{
	protected $table = 'students_ren';
	public $timestamps = false;

	protected $casts = [
		'registered_by' => 'int',
		'delete_flag' => 'bool',
		'student_age' => 'int',
		'student_gender' => 'int',
		'is_australian' => 'int',
		'parental_const' => 'int'
	];

	protected $dates = [
		'registration_date'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'avatar_name',
		'password',
		'promotional_code',
		'school_name',
		'teacher_name',
		'teacher_email',
		'registration_date',
		'registered_by',
		'delete_flag',
		'student_grade',
		'student_age',
		'student_gender',
		'is_australian',
		'parental_const'
	];
}
