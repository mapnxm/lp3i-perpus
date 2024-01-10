<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar_buku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daftarbuku')->insert([
            'id'=>'1',
            'nama'=>'menjadi kaya dalam 5 detik',
            'kode'=>'crm-002',
            'penulis'=>'zoryudin',
            'status'=>'1',
        ]);
        DB::table('daftarbuku')->insert([
            'id'=>'2',
            'nama'=>'kisah nabi adam',
            'kode'=>'sjr-001',
            'penulis'=>'ahmad',
            'status'=>'0',
        ]);
        DB::table('daftarbuku')->insert([
            'id'=>'3',
            'nama'=>'cara membunuh udin',
            'kode'=>'cmk-001',
            'penulis'=>'udin',
            'status'=>'1',
        ]);
        DB::table('daftarbuku')->insert([
            'id'=>'4',
            'nama'=>'cara membunuh suki',
            'kode'=>'cmk-002',
            'penulis'=>'udin',
            'status'=>'0',
        ]);
        DB::table('daftarbuku')->insert([
            'id'=>'5',
            'nama'=>'buku tulis',
            'kode'=>'crc-001',
            'penulis'=>'udin',
            'status'=>'1',
        ]);
        DB::table('daftarbuku')->insert([
            'id'=>'6',
            'nama'=>'buku masak',
            'kode'=>'msk-001',
            'penulis'=>'ahmad',
            'status'=>'0',
        ]);
    }
}
