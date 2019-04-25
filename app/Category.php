<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Category extends Model
{

	protected $primaryKey = 'id_categories';
	protected $table = 'categories';
	public $timestamps = false;

	
}
