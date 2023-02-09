<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */

    public function run()
    {
        DB::table('profiles')->insert([
            'first_name'=>   'Mirjalol',
            'email'=>       'mirjalol@gmail.com',
            'ph_number'=>    1797987,
            'state'=>       'Uzbekistan',
            'country'=>     'ASIA',
            'time_zone'=>    'Tashkent',
            'last_name'=>    'Abduraximov',
            'organization'=> 'Lorem ip som',
            'address'=>      'Yunusabad 10-mavze',
            'zip_code'=>     '777777',
            'language'=>     'uzbek',
            'currency'=>     '1.000.000$'
        ]);
    }
}
