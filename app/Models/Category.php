<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $category_name
 * @property int $decision_type_id
 * @property int $category_status
 * 
 * @property \App\Models\DecisionType $decision_type
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'decision_type_id' => 'int',
		'category_status' => 'int'
	];

	protected $fillable = [
		'category_name',
		'decision_type_id',
		'category_status'
	];

	public function decision_type()
	{
		return $this->belongsTo(\App\Models\DecisionType::class);
	}
}
