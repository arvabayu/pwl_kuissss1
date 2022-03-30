<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
            'name' => 'Syahrul',
            'address' => 'Malang,Jawa Timur',
            'phone_number' => '08123456',
            'gender' => 'Male'
            ],
            [
            'name' => 'Ratna',
            'address' => 'Surabaya,Jawa Timur',
            'phone_number' => '08123457',
            'gender' => 'Female'
            ],
            [
            'name' => 'yogi',
            'address' => 'Jakarta,Jawa Barat',
            'phone_number' => '08123458',
            'gender' => 'Male'
            ],

        ]);
    }
}
