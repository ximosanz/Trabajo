<?php

use Illuminate\Database\Seeder;

class BooksTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 30)->create();
    }
}
