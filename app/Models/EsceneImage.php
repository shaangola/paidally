<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EsceneImage
 * 
 * @property int $id
 * @property int $escene_id
 * @property string $image_address
 * 
 * @property \App\Models\Escene $escene
 *
 * @package App\Models
 */
class EsceneImage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'escene_id' => 'int'
	];

	protected $fillable = [
		'escene_id',
		'image_address'
	];

	public function escene()
	{
		return $this->belongsTo(\App\Models\Escene::class);
	}
}
