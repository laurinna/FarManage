<?php

use Illuminate\Database\Seeder;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_types')->insert(array(
            
            array(
                'type' => 'cow',
                'createdBy' => 'Admin'
            ),

            array(
                'type' => 'goat',
                'createdBy' => 'Admin'
            ),

            array(
                'type' => 'sheep',
                'createdBy' => 'Admin'
            ),

            array(
                'type' => 'chicken',
                'createdBy' => 'Admin'
            ),
        ));
    }
}
