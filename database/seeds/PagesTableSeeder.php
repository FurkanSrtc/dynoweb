<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([[
            'parent_id' => null,
            'language_id' => 1,
            'name' => 'Home',
            'title' => '',
            'slug' => '',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 1,
            'name' => 'About Us',
            'title' => 'About Us',
            'slug' => 'about-us',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 1,
            'name' => 'Services',
            'title' => 'Our Services',
            'slug' => 'our-services',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 1,
            'name' => 'Contact Us',
            'title' => 'Contact Us',
            'slug' => 'contact-us',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 2,
            'name' => 'Anasayfa',
            'title' => '',
            'slug' => '',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 2,
            'name' => 'Hakkımızda',
            'title' => 'Hakkımızda',
            'slug' => 'hakkimizda',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 2,
            'name' => 'Hizmetler',
            'title' => 'Hizmetler',
            'slug' => 'hizmetler',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => null,
            'language_id' => 2,
            'name' => 'İletişim',
            'title' => 'İletişim',
            'slug' => 'iletisim',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => 3,
            'language_id' => 1,
            'name' => 'Screen Repair',
            'title' => 'Screen Repair',
            'slug' => 'screen-repair',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => 7,
            'language_id' => 2,
            'name' => 'Ekran Tamiri',
            'title' => 'Ekran Tamiri',
            'slug' => 'ekran-tamiri',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ],[
            'parent_id' => 10,
            'language_id' => 2,
            'name' => 'Ekran Camı Değişimi',
            'title' => 'Ekran Camı Değişimi',
            'slug' => 'ekran-cami-degisimi',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_robots' => 'index,follow',
            'status' => true
        ]]);
    }
}
