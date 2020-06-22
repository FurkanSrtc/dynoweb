<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguagesTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ComponentsTableSeeder::class);
        $this->call(TwentyTwentyTableSeeder::class);
        $this->call(TestPropsTableSeeder::class);
    }
}
