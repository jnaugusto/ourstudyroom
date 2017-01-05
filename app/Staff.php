<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

	protected $table = 'staffs';
	protected $primaryKey = 'staff_id';
	public $timestamps = false;
	protected $fillable = [
        'user_id', 'email_address', 'firstname', 'lastname', 'photo'
    ];

}
