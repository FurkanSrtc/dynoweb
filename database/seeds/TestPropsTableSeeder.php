<?php

use Illuminate\Database\Seeder;

class TestPropsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_props')->insert([[
            'page_id' => 5,
            'test' => 'test'
        ]]);
    }
}

