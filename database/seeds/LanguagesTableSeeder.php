<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([[
            'name' => 'English',
            'code' => 'en',
            'collation' => 'ut8_general_ci',
            'image' => 'united_states.png',
            'sort_order' => 0,
            'status' => true
        ],[
            'name' => 'Turkish',
            'code' => 'tr',
            'collation' => 'ut8_turkish_ci',
            'image' => 'turkey.png',
            'sort_order' => 1,
            'status' => true
        ]]);
    }
}
