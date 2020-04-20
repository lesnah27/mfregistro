<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'SNS- GOBIERNO/CONTRATO'
        ]);

        DB::table('categories')->insert([
            'name' => 'INSTITUCIONAL / DECENTRALIZADOS'
        ]);

        DB::table('categories')->insert([
            'name' => 'HOSPITALARIA'
        ]);
    }
}



