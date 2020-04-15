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
            'name' => 'privado'
        ]);

        DB::table('categories')->insert([
            'name' => 'publico'
        ]);

        DB::table('categories')->insert([
            'name' => 'Decentralizado'
        ]);

        DB::table('categories')->insert([
            'name' => 'almacen'
        ]);

    }
}



