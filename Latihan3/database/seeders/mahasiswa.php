<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim'=>'f1e122130',
            'nama'=>'bela',
            'kelas'=>'r1',
            'deskripsi'=>'peserta'
        ]);

        DB::table('mahasiswa')->insert([
            'nim'=>'f1e122630',
            'nama'=>'eka',
            'kelas'=>'r6',
            'deskripsi'=>'panitia'
        ]);

    }
}