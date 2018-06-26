<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EluminatiComment
 * 
 * @property int $id
 * @property int $eluminati_detail_id
 * @property string $comments
 * @property int $rating
 * @property int $user_id
 * @property \Carbon\Carbon $added_on
 *
 * @package App\Models
 */
class EluminatiComment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'eluminati_detail_id' => 'int',
		'rating' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'added_on'
	];

	protected $fillable = [
		'eluminati_detail_id',
		'comments',
		'rating',
		'user_id',
		'added_on'
	];
}
