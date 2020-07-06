<?php

use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert(array(
            
            array(
                'countyNumber' => '01',
                'countyName' => 'Mombasa'
            ),

            array(
                'countyNumber' => '02',
                'countyName' => 'Kwale'
            ),


            array(
                'countyNumber' => '03',
                'countyName' => 'Kilifi'
            ),

            array(
                'countyNumber' => '04',
                'countyNaame' => 'Tana River',
            ),

            array(
                'countyNumber' => '05',
                'countyName' => 'Lamu',
            ),

            array(
                'countyNumber' => '06',
                'countyName' => 'Taita Taveta'
            ),

            array(
                'countyNumber' => '07',
                'countyName' => 'Garissa'
            ),

            array(
                'countyNumber' => '08',
                'countyName' => 'Wajir',
            ),

            array(
                'countyNumber' => '09',
                'countyName' => 'Mandera'
            ),

            array(
                'countyNumber' => '10',
                'countyName' => 'Marsabit',
            ),

            array(
                'countyNumber' => '11',
                'countyName' => 'Isiolo'
            ),

            array(
                'countyNumber' => '12',
                'countyName' => 'Meru'
            ),

            array(
                'countyNumber' => '13',
                'countyName' => 'Tharaka-Nithi',
            ),

            array(
                'countyNumber' => '14',
                'countyName' => 'Embu'
            ),

            array(
                'countyNumber' => '15',
                'countyName' => 'Kitui'
            ),

            array(
                'countyNumber' => '16',
                'countyName' => 'Machakos'
            ),

            array(
                'countyNumber' => '17',
                'countyName' => 'Makueni'
            ),

            array(
                'countyNumber' => '47',
                'countyName' => 'Nairobi',
            ),
        ));
            
    }
}
