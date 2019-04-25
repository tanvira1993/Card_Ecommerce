<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class SubCategory extends Model
{

	protected $primaryKey = 'id_sub_categories';
	protected $table = 'sub_categories';
	public $timestamps = false;

	
}
