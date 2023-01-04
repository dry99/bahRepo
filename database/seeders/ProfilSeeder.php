<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
                    [
                        'name'=>'Partner',
                        'display_name'=>'Partner', 
                    ],
            ];
            DB::table('profils')->insert($data);
    }
}
