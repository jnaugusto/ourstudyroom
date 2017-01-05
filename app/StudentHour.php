<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentHour extends Model
{
	protected $primaryKey = 'student_id';
    protected $table = 'student_hours';
    public $timestamps = false;
}
