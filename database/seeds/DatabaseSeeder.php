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
        // $this->call(UsersTableSeeder::class);
        $seeders = array('PeriodsTableSeeder',
                        'VideosTableSeeder',
                        'EventsTableSeeder',
                        'CompositionsTableSeeder',
                        'AuthorsTableSeeder',
                        'PhotosTableSeeder',
                        'UsersTableSeeder');

        foreach ($seeders as $seeder){ 
            $this->call($seeder);
        }
        
    }
}
