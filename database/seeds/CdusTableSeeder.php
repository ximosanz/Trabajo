<?php

use Illuminate\Database\Seeder;
Use App\Cdu;
class CdusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Cdu::create(['cdu'=>'abc',
        'description' => 'CDU agc'
        ]);
        Cdu::create(['cdu'=>'123',
        'description' => 'CDU 123'
        ]);

        Cdu::create(['cdu'=>'123.2',
        'description' => '123.2'
        ]);

        

    }
}
