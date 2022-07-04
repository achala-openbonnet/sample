<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->delete();

        $categories = array(

            array('id' =>1, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Oil Change Services', 'description' => '' ),

            array('id' =>2, 'slug' =>'' ,'parent_id' => Null, 'level' => 0 , 'name' => 'AC Services', 'description' => '' ),

            array('id' =>3, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Brake Services', 'description' => '' ),

            array('id' =>4, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'All Repairs', 'description' => '' ),

            array('id' =>5, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Battery Support', 'description' => '' ),

            array('id' =>6, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'New Tyres', 'description' => '' ),

            array('id' =>7, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Car Inspection', 'description' => '' ),

            array('id' =>8, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Car Wash & Car Disinfection', 'description' => '' ),

            array('id' =>9, 'slug' =>''  ,'parent_id' => Null, 'level' => 0 , 'name' => 'Spares & Accessories', 'description' => '' )

            );

        DB::table('categories')->insert($categories);
    }
}
