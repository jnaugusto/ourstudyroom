<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'username', 'password', 'email', 'role_id'
    ];

    protected $hidden = [
        'password',
    ];

    public function staffs()
    {
        return $this->hasOne('App\Staff', 'user_id');
    }

    public function students()
    {
        return $this->hasOne('App\Student', 'user_id');
    }

    public function roles()
    {
        return $this->belongsTo('App\UserRole', 'role_id');
    }
}
