<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Jun 2018 06:30:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MydbrFoldersPriv
 * 
 * @property int $folder_id
 * @property string $username
 * @property int $group_id
 * @property int $authentication
 *
 * @package App\Models
 */
class MydbrFoldersPriv extends Eloquent
{
	protected $table = 'mydbr_folders_priv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'folder_id' => 'int',
		'group_id' => 'int',
		'authentication' => 'int'
	];
}
