<?php

use Illuminate\Database\Seeder;

class AnimalBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_breeds')->insert(array(
            
            array(
                'breedName' => 'jersey',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'angus',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'limousin',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'boer',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'Saanen',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'alpine',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'valais',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'merino',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'dorper',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'plymouth',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'leghorn',
                'createdBy' => 'Admin'
            ),

            array(
                'breedName' => 'silkie',
                'createdBy' => 'Admin'
            ),
        ));
    }
}
