<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peminjam extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rent_logs')->insert([
            'id'=>'1',
            'nama'=>'udin',
            'email'=>'0000@gmail.com',
            'tglKembali'=>'2023-12-12',
            'tglPinjam'=>'2023-12-12',
            'JudulBuku'=>'ikan komang',
            'kode'=>'cmc-001',
        ]);
        DB::table('rent_logs')->insert([
            'id'=>'2',
            'nama'=>'suki',
            'email'=>'0000@gmail.com',
            'tglKembali'=>'2023-12-12',
            'tglPinjam'=>'2023-12-12',
            'JudulBuku'=>'ikan hiu',
            'kode'=>'cmc-002',
        ]);
        DB::table('rent_logs')->insert([
            'id'=>'3',
            'nama'=>'satrio',
            'email'=>'0000@gmail.com',
            'tglKembali'=>'2023-12-12',
            'tglPinjam'=>'2023-12-12',
            'JudulBuku'=>'ikan balikan sama mantan',
            'kode'=>'cmc-003',
        ]);
        DB::table('rent_logs')->insert([
            'id'=>'4',
            'nama'=>'ega',
            'email'=>'0000@gmail.com',
            'tglKembali'=>'2023-12-12',
            'tglPinjam'=>'2023-12-12',
            'JudulBuku'=>'ikan gamon padahal blum jadian',
            'kode'=>'cmc-004',
        ]);
    }
}
