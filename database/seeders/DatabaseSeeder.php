<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /*
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

       // \App\Models\User::factory()->create([
        //'name' => 'Test User',
        //'email' => 'test@example.com',
        //]);

        DB::table('main_models') ->insert(
            [
                'id'     =>'1',
                'blogtitle' =>'Man must explore, and this is exploration at its greatest',
                'blogdescription' =>'Problems look mighty small from 150 miles up',
                'postedby'  =>'Start Bootstrap ',
                'date'  =>'September 24, 2022'
            ]
        );
         DB::table('main_models') ->insert(
            [
                'id'   =>'2',
                'blogtitle' =>'I believe every human has a finite number of heartbeats. I dont intend to waste any of mine',
                'blogdescription' =>'Many say exploration is part of our destiny, but its actually our duty to future generations.',
                'postedby'  =>'Start Bootstrap ',
                'date'  =>'September 24, 2022'
            ]
         );
         DB::table('main_models') ->insert(
            [
                'id'   =>'3',
                 'blogtitle' =>'Science has not yet mastered prophecy',
                'blogdescription' =>'We predict too much for the next year and yet far too little for the next ten.',
                'postedby'  =>'Start Bootstrap ',
                'date'  =>'August 24, 2022'
            ]
            );
    }
}
