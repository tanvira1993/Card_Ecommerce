<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Blog extends Model
{

	protected $primaryKey = 'id_blogs';
	protected $table = 'blogs';
	public $timestamps = false;

	
}
