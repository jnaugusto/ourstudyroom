<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{

	protected $table = 'class_schedules';
	protected $primaryKey = 'class_id';
	public $timestamps = false;
	protected $fillable = [
        'staff_id', 'sched_date', 'class_type'
    ];

    public function staffs()
    {
		// Get all staff's information
        return $this->belongsTo('App\Staff', 'staff_id');
    }

    public function students()
    {
		// Get all student's information
        return $this->belongsTo('App\Student', 'student_id');
    }

}
