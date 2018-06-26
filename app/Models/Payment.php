<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Payment
 * 
 * @property int $id
 * @property int $user_id
 * @property string $txn_id
 * @property float $payment_gross
 * @property string $currency_code
 * @property string $payment_type
 * @property string $payment_status
 * @property \Carbon\Carbon $invoice_sent
 *
 * @package App\Models
 */
class Payment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'payment_gross' => 'float'
	];

	protected $dates = [
		'invoice_sent'
	];

	protected $fillable = [
		'user_id',
		'txn_id',
		'payment_gross',
		'currency_code',
		'payment_type',
		'payment_status',
		'invoice_sent'
	];
}
