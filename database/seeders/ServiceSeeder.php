<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('services')->delete();

        $services = array(

            array('id' =>1, 'slug' =>''  ,'category_id' => 1, 'level' => 1 , 'name' => 'Basic Service (Oil Change)', 'description' => '' ),
            array('id' =>2, 'slug' =>''  ,'category_id' => 1, 'level' => 1 , 'name' => 'Minor Service', 'description' => '' ),
            array('id' =>3, 'slug' =>''  ,'category_id' => 1, 'level' => 1 , 'name' => 'Basic Service + Flushing', 'description' => '' ),
            array('id' =>4, 'slug' =>''  ,'category_id' => 1, 'level' => 1 , 'name' => 'Oil Change at Home (Dubai Only)', 'description' => '' ),

            array('id' =>5, 'slug' =>''  ,'category_id' => 2, 'level' => 1 , 'name' => 'AC Gas Refill', 'description' => '' ),
            array('id' =>6, 'slug' =>''  ,'category_id' => 2, 'level' => 1 , 'name' => 'AC Gas Top Up', 'description' => '' ),

            array('id' =>7, 'slug' =>''  ,'category_id' => 3, 'level' => 1 , 'name' => 'Brake Pads Replacement', 'description' => '' ),
            array('id' =>8, 'slug' =>''  ,'category_id' => 3, 'level' => 1 , 'name' => 'Brake Cleaning & Disc Polishing', 'description' => '' ),

            array('id' =>9, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => '*Not Sure - Help Me Out!', 'description' => '' ),
            array('id' =>10, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'AC Repair', 'description' => '' ),
            array('id' =>11, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Air Bag', 'description' => '' ),
            array('id' =>12, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Body Repair', 'description' => '' ),
            array('id' =>13, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Break Oil Change', 'description' => '' ),
            array('id' =>14, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Breaks', 'description' => '' ),
            array('id' =>15, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Electrical', 'description' => '' ),
            array('id' =>16, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Engine', 'description' => '' ),
            array('id' =>17, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Gear/Transmission System', 'description' => '' ),
            array('id' =>18, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Steering', 'description' => '' ),
            array('id' =>19, 'slug' =>''  ,'category_id' => 4, 'level' => 1 , 'name' => 'Suspension & Axle', 'description' => '' ),


            array('id' =>20, 'slug' =>''  ,'category_id' => 5, 'level' => 1 , 'name' => 'Battery Boost', 'description' => '' ),
            array('id' =>21, 'slug' =>''  ,'category_id' => 5, 'level' => 1 , 'name' => 'New Battery', 'description' => '' ),


            array('id' =>22, 'slug' =>''  ,'category_id' => 6, 'level' => 1 , 'name' => 'New Tyres', 'description' => '' ),
            array('id' =>23, 'slug' =>''  ,'category_id' => 6, 'level' => 1 , 'name' => 'Wheel Alignment', 'description' => '' ),

            array('id' =>24, 'slug' =>''  ,'category_id' => 7, 'level' => 1 , 'name' => 'Car-Health Check', 'description' => '' ),
            array('id' =>25, 'slug' =>''  ,'category_id' => 7, 'level' => 1 , 'name' => 'Pre-Purchase Inspection', 'description' => '' ),


            array('id' =>26, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Paint Protection Film', 'description' => '' ),
            array('id' =>27, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Detailing', 'description' => '' ),
            array('id' =>28, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Tinting', 'description' => '' ),
            array('id' =>29, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Car Foiling & Wrapping', 'description' => '' ),
            array('id' =>30, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Ceramic Coating', 'description' => '' ),
            array('id' =>31, 'slug' =>''  ,'category_id' => 8, 'level' => 1 , 'name' => 'Paint Protection Film(PPF)', 'description' => '' ),

            array('id' =>32, 'slug' =>''  ,'category_id' => 9, 'level' => 1 , 'name' => 'Alarm & Security', 'description' => '' ),
            array('id' =>33, 'slug' =>''  ,'category_id' => 9, 'level' => 1 , 'name' => 'Polishes, Waxes & Cleaners', 'description' => '' ),
            array('id' =>34, 'slug' =>''  ,'category_id' => 9, 'level' => 1 , 'name' => 'Smart Devices', 'description' => '' ),
            array('id' =>35, 'slug' =>''  ,'category_id' => 9, 'level' => 1 , 'name' => 'Stereo, Speakers & Audio', 'description' => '' ),
            array('id' =>36, 'slug' =>''  ,'category_id' => 9, 'level' => 1 , 'name' => 'Android Multimedia System', 'description' => '' )

        );

        DB::table('services')->insert($services);
    }
}
