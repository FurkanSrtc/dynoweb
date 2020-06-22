<?php

use Illuminate\Database\Seeder;

class TwentyTwentyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('twentytwenty')->insert([[
            'page_id' => 1,
            'before' => 'images/before.png',
            'beforeLabel' => null,
            'after' => 'images/after.png',
            'afterLabel' => null,
            'offset' => null,
            'status' => true
        ],[
            'page_id' => 5,
            'before' => 'images/before.png',
            'beforeLabel' => null,
            'after' => 'images/after.png',
            'afterLabel' => null,
            'offset' => null,
            'status' => true
        ],[
            'page_id' => 5,
            'before' => 'images/before.png',
            'beforeLabel' => null,
            'after' => 'images/after.png',
            'afterLabel' => null,
            'offset' => null,
            'status' => true
        ]]);
    }
}
