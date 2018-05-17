<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function companies(){
        return $this->hasMany('App\Company');
    }
    
    public function tasks(){
        return $this->belongsToMany('App\Task');
    }

    public function projects(){
        return $this->belongsToMany('App\Project');
    }
}
// $hidden is something completely different from $fillable and $guarded which are opposites. 
// $fillable describes which fields can be mass assigned(via fill() method for example) 
// while $guarded sets which fields can not be mass assigned so when you fill() with properties that are guarded they won't get saved in database. 
// $hidden are fields that won't be shown when serializing model to JSON or array.