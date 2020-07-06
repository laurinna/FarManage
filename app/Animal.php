<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
    protected $table = 'animals';

    protected $fillable = [
        'typeID', 'breedID', 'farmerID','dateOfBirth', 'comments', 'createdBy'
    ];

   
    public function farmer()
    {
        return $this->belongsTo('App\Farmer', 'farmerID');
    }

    public function animal_type()
    {
        return $this->belongsTo('App\AnimalType', 'typeID' );
    }

    
    public function animal_breed()
    {
        return $this->belongsTo('App\AnimalBreed', 'breedID' );
    }

}
