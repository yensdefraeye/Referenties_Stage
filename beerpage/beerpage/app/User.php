<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function beers()
    {
        return $this->belongsToMany('App\Beer', 'likes');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function isAdmin() // check if user is admin
    {
        return $this->role_id == 2 ? true : false;
    }

    public function isBasicUser() // check if user is basic user
    {
        return $this->role_id == 1 ? true : false;
    }
}
