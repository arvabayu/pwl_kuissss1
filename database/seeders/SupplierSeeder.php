<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            [
            'name' => 'Rita',
            'address' => 'Ponorogo,Jawa Timur',
            'phone_number' => '08123456',
            'gender' => 'Female'
            ],
            [
            'name' => 'Eka',
            'address' => 'Kediri,Jawa Timur',
            'phone_number' => '08123457',
            'gender' => 'Female'
            ],
            [
            'name' => 'Heru',
            'address' => 'Malang,Jawa Timur',
            'phone_number' => '08123458',
            'gender' => 'Male'
            ],

        ]);
    }
}
