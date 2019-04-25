<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class WishList extends Model
{

	protected $primaryKey = 'id_wish_lists';
	protected $table = 'wish_lists';
	public $timestamps = false;

	
}
