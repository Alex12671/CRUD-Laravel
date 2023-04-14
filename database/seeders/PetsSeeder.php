<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            [
                'username' => 'Alberto69',
                'password' => 'admin',
                'name' => 'Lila',
                'breed' => 'Boxer',
                'gender' => 'Femella',
                'color' => 'Negro',
                'edat' => '7',
                'ownerName' => 'Alberto',
                'phoneNumber' => '685412596',
                'picture' => 'petsPictures/lila.png',
            ],
            [
                'username' => 'Alejandro07',
                'password' => '54321',
                'name' => 'Roma',
                'breed' => 'Boxer',
                'gender' => 'Mascle',
                'color' => 'Dorado',
                'edat' => '4',
                'ownerName' => 'Alejandro',
                'phoneNumber' => '645272596',
                'picture' => 'petsPictures/roma.png',
            ],
            [
                'username' => 'Pau42',
                'password' => '12345',
                'name' => 'Martín',
                'breed' => 'Boxer',
                'gender' => 'Mascle',
                'color' => 'Blanco',
                'edat' => '13',
                'ownerName' => 'Pau',
                'phoneNumber' => '621953057',
                'picture' => 'petsPictures/martin.png',
            ],
            [
                'username' => 'Pedro25',
                'password' => '12345',
                'name' => 'María',
                'breed' => 'Boxer',
                'gender' => 'Femella',
                'color' => 'Blanco',
                'edat' => '6',
                'ownerName' => 'Pedro',
                'phoneNumber' => '601854236',
                'picture' => 'petsPictures/maria.png',
            ],
        ]);

    }
}
