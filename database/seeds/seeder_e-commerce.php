<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class seeder_e extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
        foreach (range(0,10) as $i) {
        	DB::table('tbl_e-commerce')->insert([
        		'id_e-commerce' => $faker->numerify('com###'),
        		'link_e-commerce'=> $faker->domainName  ,
        		'id_product'=> $faker->numerify('pro###'),
        	]);
        }
    }
}
