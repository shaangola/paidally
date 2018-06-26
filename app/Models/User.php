<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email_address
 * @property string $phone
 * @property int $age
 * @property string $password
 * @property string $user_type
 * @property string $teacher_email
 * @property string $username
 * @property int $context_role_user_id
 * @property string $user_image
 * @property int $country_id
 * @property int $stage_id
 * @property int $decision_type_id
 * @property string $group_code
 * @property int $user_current_status_id
 * @property string $influence_network
 * @property string $facebook_network
 * @property string $linkedin_network
 * @property string $twitter_followers
 * @property string $blog
 * @property string $other_url
 * @property \Carbon\Carbon $registration_date
 * @property \Carbon\Carbon $updation_date
 * @property \Carbon\Carbon $last_login
 * @property string $varification_code
 * @property int $login_status
 * @property int $registration_status
 * @property int $check_video_status
 * @property string $account_type
 * @property int $organisation_size
 * @property string $registration_type
 * @property \Carbon\Carbon $subscription_start_date
 * @property \Carbon\Carbon $subscription_end_date
 * @property \Carbon\Carbon $trail_end_date
 * @property float $zoho_customer_id
 * @property string $zoho_hosted_page_id
 * @property string $zoho_hosted_page_url
 * @property string $plan_code
 * @property int $life_time_status
 * @property int $checkout_status
 * @property int $registration_mail_status
 * @property bool $is_admin
 * @property float $zoho_crm_contact_id
 * @property int $subscription
 * @property string $coupon_code
 * @property int $parent_id
 * 
 * @property \Illuminate\Database\Eloquent\Collection $article_published_notifications
 * @property \Illuminate\Database\Eloquent\Collection $comment_views
 * @property \Illuminate\Database\Eloquent\Collection $comments
 * @property \Illuminate\Database\Eloquent\Collection $context_roles
 * @property \Illuminate\Database\Eloquent\Collection $discussions
 * @property \Illuminate\Database\Eloquent\Collection $endorsements
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_likes
 * @property \Illuminate\Database\Eloquent\Collection $escene_comment_views
 * @property \Illuminate\Database\Eloquent\Collection $escene_comments
 * @property \Illuminate\Database\Eloquent\Collection $libraries
 * @property \Illuminate\Database\Eloquent\Collection $question_post_comments
 * @property \Illuminate\Database\Eloquent\Collection $question_post_likes
 * @property \Illuminate\Database\Eloquent\Collection $question_post_views
 * @property \Illuminate\Database\Eloquent\Collection $user_entropolis_guidelines
 * @property \Illuminate\Database\Eloquent\Collection $user_invitations
 * @property \Illuminate\Database\Eloquent\Collection $user_profiles
 * @property \Illuminate\Database\Eloquent\Collection $wisdom_comment_views
 * @property \Illuminate\Database\Eloquent\Collection $wisdom_comments
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'context_role_user_id' => 'int',
		'country_id' => 'int',
		'stage_id' => 'int',
		'decision_type_id' => 'int',
		'user_current_status_id' => 'int',
		'login_status' => 'int',
		'registration_status' => 'int',
		'check_video_status' => 'int',
		'organisation_size' => 'int',
		'zoho_customer_id' => 'float',
		'life_time_status' => 'int',
		'checkout_status' => 'int',
		'registration_mail_status' => 'int',
		'is_admin' => 'bool',
		'zoho_crm_contact_id' => 'float',
		'subscription' => 'int',
		'parent_id' => 'int'
	];

	protected $dates = [
		'registration_date',
		'updation_date',
		'last_login',
		'subscription_start_date',
		'subscription_end_date',
		'trail_end_date'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'gender',
		'email_address',
		'phone',
		'age',
		'password',
		'user_type',
		'teacher_email',
		'username',
		'context_role_user_id',
		'user_image',
		'country_id',
		'stage_id',
		'decision_type_id',
		'group_code',
		'user_current_status_id',
		'influence_network',
		'facebook_network',
		'linkedin_network',
		'twitter_followers',
		'blog',
		'other_url',
		'registration_date',
		'updation_date',
		'last_login',
		'varification_code',
		'login_status',
		'registration_status',
		'check_video_status',
		'account_type',
		'organisation_size',
		'registration_type',
		'subscription_start_date',
		'subscription_end_date',
		'trail_end_date',
		'zoho_customer_id',
		'zoho_hosted_page_id',
		'zoho_hosted_page_url',
		'plan_code',
		'life_time_status',
		'checkout_status',
		'registration_mail_status',
		'is_admin',
		'zoho_crm_contact_id',
		'subscription',
		'coupon_code',
		'parent_id'
	];

	public function article_published_notifications()
	{
		return $this->hasMany(\App\Models\ArticlePublishedNotification::class);
	}

	public function comment_views()
	{
		return $this->hasMany(\App\Models\CommentView::class);
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class);
	}

	public function context_roles()
	{
		return $this->belongsToMany(\App\Models\ContextRole::class, 'context_role_users')
					->withPivot('id');
	}

	public function discussions()
	{
		return $this->hasMany(\App\Models\Discussion::class, 'user_id_creator');
	}

	public function endorsements()
	{
		return $this->hasMany(\App\Models\Endorsement::class);
	}

	public function escene_comment_likes()
	{
		return $this->hasMany(\App\Models\EsceneCommentLike::class, 'user_id_creator');
	}

	public function escene_comment_views()
	{
		return $this->hasMany(\App\Models\EsceneCommentView::class);
	}

	public function escene_comments()
	{
		return $this->hasMany(\App\Models\EsceneComment::class, 'user_id_creator');
	}

	public function libraries()
	{
		return $this->hasMany(\App\Models\Library::class, 'user_id_viewer');
	}

	public function question_post_comments()
	{
		return $this->hasMany(\App\Models\QuestionPostComment::class, 'user_id_creator');
	}

	public function question_post_likes()
	{
		return $this->hasMany(\App\Models\QuestionPostLike::class);
	}

	public function question_post_views()
	{
		return $this->hasMany(\App\Models\QuestionPostView::class, 'other_user_id');
	}

	public function user_entropolis_guidelines()
	{
		return $this->hasMany(\App\Models\UserEntropolisGuideline::class);
	}

	public function user_invitations()
	{
		return $this->hasMany(\App\Models\UserInvitation::class, 'invitee_user_id');
	}

	public function user_profiles()
	{
		return $this->hasMany(\App\Models\UserProfile::class);
	}

	public function wisdom_comment_views()
	{
		return $this->hasMany(\App\Models\WisdomCommentView::class);
	}

	public function wisdom_comments()
	{
		return $this->hasMany(\App\Models\WisdomComment::class);
	}
}
