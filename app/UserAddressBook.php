<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class UserAddressBook extends Model
{

	protected $primaryKey = 'id_address_books';
	protected $table = 'user_address_books';
	public $timestamps = false;

	
}
