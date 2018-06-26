<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Advice
 * 
 * @property int $id
 * @property string $co_author_first
 * @property string $co_author_last
 * @property int $challenge_id
 * @property int $decision_type_id
 * @property int $category_id
 * @property string $source_url
 * @property \Carbon\Carbon $advice_decision_date
 * @property string $advice_title
 * @property string $advice_image
 * @property string $executive_summary
 * @property string $challenge_addressing
 * @property string $key_advice_points
 * @property string $publication_name
 * @property int $context_role_user_id
 * @property int $advice_views
 * @property \Carbon\Carbon $advice_posted_date
 * @property \Carbon\Carbon $advice_update_date
 * @property int $status_id
 * @property int $draft
 * @property int $network_type
 * @property string $feature_blog
 * @property int $is_blog
 * @property int $blog_type
 *
 * @package App\Models
 */
class Advice extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'challenge_id' => 'int',
		'decision_type_id' => 'int',
		'category_id' => 'int',
		'context_role_user_id' => 'int',
		'advice_views' => 'int',
		'status_id' => 'int',
		'draft' => 'int',
		'network_type' => 'int',
		'is_blog' => 'int',
		'blog_type' => 'int'
	];

	protected $dates = [
		'advice_decision_date',
		'advice_posted_date',
		'advice_update_date'
	];

	protected $fillable = [
		'co_author_first',
		'co_author_last',
		'challenge_id',
		'decision_type_id',
		'category_id',
		'source_url',
		'advice_decision_date',
		'advice_title',
		'advice_image',
		'executive_summary',
		'challenge_addressing',
		'key_advice_points',
		'publication_name',
		'context_role_user_id',
		'advice_views',
		'advice_posted_date',
		'advice_update_date',
		'status_id',
		'draft',
		'network_type',
		'feature_blog',
		'is_blog',
		'blog_type'
	];
}
