<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insert single row
        // city::create(['c_name'=>'peshawar']);

        //insert mulitple rows
        //laravel has builtin method collect to deal with arrays
        // $cities = collect([
        //     ['c_name'=>'islamabad'],
        //     ['c_name'=>'karachi'],
        //     ['c_name'=>'mardan']
        // ]);
       //collect function has method each which loops through array returing single row
        // $cities->each(function($city){
        //     city::insert($city);
        // });


        // //insert data from json file
        // $json = File::get('resources/json/cities.json');
        // $records = json_decode($json,true);
        // foreach ($records as $key => $record) {
        //     city::insert($record);

        //insert fake data
        // for($i=0;$i<20;$i++){
        //     city::insert([
        //         'c_name'=> fake()->city()
        //     ]);
        // }

        //insert fake data using factory
        city::factory(20)->create();
        
    }
}
