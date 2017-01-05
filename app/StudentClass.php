<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
	protected $primaryKey = 'student_id';
    protected $table = 'student_classes';
    public $timestamps = false;

 	public function course()
 	{
 		// Get the student's course information
 		return $this->hasMany('App\Course', 'course_id');
 	}

 	public function level()
 	{
 		// Get the student's level information
 		return $this->hasMany('App\Level', 'level_id');
 	}
}
