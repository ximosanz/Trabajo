<?php

use Illuminate\Database\Seeder;
Use App\Editorial;
class EditorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Editorial::class, 30)->create();
        Editorial::create(['name'=>'Planeta']);
        Editorial::create(['name'=>'SM']);
        Editorial::create(['name'=>'Santillana']);
        Editorial::create(['name'=>'Anaya']);
    }
}
