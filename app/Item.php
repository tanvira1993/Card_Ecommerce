<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Item extends Model
{

	protected $primaryKey = 'id_items';
	protected $table = 'items';
	public $timestamps = false;

	
}
