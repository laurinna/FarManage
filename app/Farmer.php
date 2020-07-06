<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Farmer extends Authenticatable
{
    
    use Notifiable;

    protected $table = 'farmers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'middleName','lastName','email', 'password', 'countyID', 'telephoneNo' 
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


    public function county()
    {
        return $this->belongsTo('App\County', 'countyID');
    }

    
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }


}
