<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalBreed extends Model
{
    protected $table = 'animal_breeds';

    protected $fillable = [
        'breedName', 'createdBy'
    ];

    /**
     * Get the Animal record associated with animalbreed.
     */
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
