<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Publication
 * 
 * @property int $id
 * @property string $author_first
 * @property string $author_last
 * @property string $author_2_first
 * @property string $author_2_last
 * @property \Carbon\Carbon $date_published
 * @property string $source_name
 * @property string $rss_feed
 * @property int $decision_type_id
 * @property int $category_id
 * @property string $publication
 * @property float $rating
 * @property string $executive_summary
 * @property string $advising_on
 * @property string $key_advice_point
 * @property \Carbon\Carbon $added_on
 * @property \Carbon\Carbon $last_updated
 * @property int $wisdom_view
 * @property int $user_id
 * @property int $draft
 * @property int $network_type
 * 
 * @property \Illuminate\Database\Eloquent\Collection $wisdom_comments
 *
 * @package App\Models
 */
class Publication extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'decision_type_id' => 'int',
		'category_id' => 'int',
		'rating' => 'float',
		'wisdom_view' => 'int',
		'user_id' => 'int',
		'draft' => 'int',
		'network_type' => 'int'
	];

	protected $dates = [
		'date_published',
		'added_on',
		'last_updated'
	];

	protected $fillable = [
		'author_first',
		'author_last',
		'author_2_first',
		'author_2_last',
		'date_published',
		'source_name',
		'rss_feed',
		'decision_type_id',
		'category_id',
		'publication',
		'rating',
		'executive_summary',
		'advising_on',
		'key_advice_point',
		'added_on',
		'last_updated',
		'wisdom_view',
		'user_id',
		'draft',
		'network_type'
	];

	public function wisdom_comments()
	{
		return $this->hasMany(\App\Models\WisdomComment::class);
	}
}
