<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    protected $table = 'animal_types';

    protected $fillable = [
        'type', 'createdBy'
    ];

    
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
