<?php

use Illuminate\Database\Seeder;

use App\Parameter;

class ParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parameter::create([
            'name' => 'availability_red',
            'value' => 85
        ]);

        Parameter::create([
            'name' => 'availability_yellow',
            'value' => 90
        ]);
    }
}
