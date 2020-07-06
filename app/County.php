<?php

namespace App;
use App\County;
use App\Farmer;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'counties';

    protected $fillable = [
        'countyNumber', 'countyName'
    ];

    /**
     * Get the households for the county.
     */
    public function farmers()
    {
        return $this->hasMany('App\Farmer');
    }

}
