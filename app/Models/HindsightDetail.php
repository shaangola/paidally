<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HindsightDetail
 * 
 * @property int $id
 * @property int $hindsight_id
 * @property string $hindsight_details
 * 
 * @property \App\Models\Hindsight $hindsight
 *
 * @package App\Models
 */
class HindsightDetail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'hindsight_id' => 'int'
	];

	protected $fillable = [
		'hindsight_id',
		'hindsight_details'
	];

	public function hindsight()
	{
		return $this->belongsTo(\App\Models\Hindsight::class);
	}
}
