<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EluminatiDetail
 * 
 * @property int $id
 * @property int $eluminati_id
 * @property string $co_author_first_name
 * @property string $co_author_last_name
 * @property \Carbon\Carbon $date_published
 * @property string $source_name
 * @property string $source_rss_feed
 * @property int $decision_type_id
 * @property int $category_id
 * @property int $second_decision_type_id
 * @property int $second_category_id
 * @property int $rating
 * @property string $challenge_addressing
 * @property string $key_advice_points
 * @property string $keywords
 * @property string $tag_line
 * @property string $summary
 * @property int $view_status
 * @property \Carbon\Carbon $added_on
 *
 * @package App\Models
 */
class EluminatiDetail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'eluminati_id' => 'int',
		'decision_type_id' => 'int',
		'category_id' => 'int',
		'second_decision_type_id' => 'int',
		'second_category_id' => 'int',
		'rating' => 'int',
		'view_status' => 'int'
	];

	protected $dates = [
		'date_published',
		'added_on'
	];

	protected $fillable = [
		'eluminati_id',
		'co_author_first_name',
		'co_author_last_name',
		'date_published',
		'source_name',
		'source_rss_feed',
		'decision_type_id',
		'category_id',
		'second_decision_type_id',
		'second_category_id',
		'rating',
		'challenge_addressing',
		'key_advice_points',
		'keywords',
		'tag_line',
		'summary',
		'view_status',
		'added_on'
	];
}
