<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtablissementTypeSeeder extends Seeder
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
                'name'=>'Hotel',
                'description'=>'Hotel',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'Residence',
                'description'=>'Residence',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
        ];
        DB::table('etablissement_types')->insert($data);
    }
}
