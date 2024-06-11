<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Admin')->insert([
            'id' => '1',
            'nama' => 'kiki',
            'alamat' =>  'Jl. Raya Malang No.1',
            'email' => 'admin@example.com',
        ]);
    }
}
