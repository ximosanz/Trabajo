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
        $this->call(PlacesTableSeeder::class);
        
        $this->call(EditorialTableSeeder::class);
        $this->call(CdusTableSeeder::class);
        $this->call(BooksTable::class);
         
    }
}
