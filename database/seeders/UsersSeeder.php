<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'dni' => '51066615Z',
                'name' => 'Alberto',
                'surname' => 'Contador',
            ],
            [
                'dni' => '03516936Y',
                'name' => 'Alejandro',
                'surname' => 'Valverde',
            ],
            [
                'dni' => '79665656G',
                'name' => 'Federico',
                'surname' => 'Rodríguez',
            ],
        ]);

    }
}
