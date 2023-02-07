<?php

namespace Database\Seeders;

use App\Models\Admin\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('settings')->insert([
             'brand_name'=>'AKT AHI',
             'site_status'=>'Yangiliklar olamiga xush kelibsiz',
            'site_name'=>'akt.uz',
            'status_mess'=>'lorem ip sum',
            'logo'=>'jlk/asd/asda'
        ]);
    }
}
