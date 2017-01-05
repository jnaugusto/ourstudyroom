<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table = 'students';
	protected $primaryKey = 'student_id';
	public $timestamps = false;
	protected $fillable = [
	    'user_id', 'email_address', 'firstname', 'lastname', 'photo'
	 ];

	public function student_class()
	{
		// Get all student's class information
		return $this->hasMany('App\StudentClass', 'student_id');
	}

}
