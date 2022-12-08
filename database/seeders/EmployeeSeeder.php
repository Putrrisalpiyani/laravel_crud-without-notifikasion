<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Selpi',
            'alamat' => 'Kopenbayah',
            'no_telp' => '0859180604267',
            'servis' => 'cuci',
            'keterangan' => 'baju',
            'kg' => '10',
            'biaya' => '40000',
            'status' => 'proses',
        ]);
    }
}
