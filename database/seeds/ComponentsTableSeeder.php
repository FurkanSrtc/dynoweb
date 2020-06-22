<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('components')->insert([[
            'page_id' => 1,
            'name' => 'twentytwenty',
            'sort_order' => 1,
            'status' => true
        ],[
            'page_id' => 5,
            'name' => 'twentytwenty',
            'sort_order' => 1,
            'status' => true
        ],[
            'page_id' => 5,
            'name' => 'test_props',
            'sort_order' => 2,
            'status' => true
        ]]);
    }
}
