<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Product extends Model
{

	protected $primaryKey = 'id_products';
	protected $table = 'products';
	public $timestamps = false;

	
}
