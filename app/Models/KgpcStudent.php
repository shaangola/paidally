<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class KgpcStudent
 * 
 * @property int $id
 * @property int $pitch_golden_entry_form_id
 * @property string $student_fullname
 * @property string $student_grade
 * @property int $student_age
 * @property int $student_gender
 * @property int $is_australian
 * @property int $parental_const
 * @property \Carbon\Carbon $registration_date
 * @property string $form_type
 *
 * @package App\Models
 */
class KgpcStudent extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'pitch_golden_entry_form_id' => 'int',
		'student_age' => 'int',
		'student_gender' => 'int',
		'is_australian' => 'int',
		'parental_const' => 'int'
	];

	protected $dates = [
		'registration_date'
	];

	protected $fillable = [
		'pitch_golden_entry_form_id',
		'student_fullname',
		'student_grade',
		'student_age',
		'student_gender',
		'is_australian',
		'parental_const',
		'registration_date',
		'form_type'
	];
}
