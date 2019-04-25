<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Order extends Model
{

	protected $primaryKey = 'id_orders';
	protected $table = 'orders';
	public $timestamps = false;

	
}
