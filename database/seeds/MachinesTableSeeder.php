<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->insert([
              'name' => 'Bomba de infusión',
              'marca' => 'Baxter',
              'modelo' => '1 Canal',
        ]);

        DB::table('machines')->insert([
            'name' => 'Bomba de infusión',
            'marca' => 'Baxter',
            'modelo' => '3 Canales',
        ]);
    }
}


