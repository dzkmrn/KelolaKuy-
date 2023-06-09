<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_alat'=>01,
                'id_kategori'=>01,
                'id_jenis'=>01,
                'nama_alat'=>'Peralatan Makan',
                'foto_alat'=>'',
                'merk_alat'=>'',
                'stok_alat'=>''
            ],
            [
                'id_alat'=>01,
                'id_kategori'=>01,
                'id_jenis'=>01,
                'nama_alat'=>'Peralatan Makan',
                'foto_alat'=>'',
                'merk_alat'=>'',
                'stok_alat'=>''
            ],
            [
                'id_alat'=>01,
                'id_kategori'=>01,
                'id_jenis'=>01,
                'nama_alat'=>'Peralatan Makan',
                'foto_alat'=>'',
                'merk_alat'=>'',
                'stok_alat'=>''
            ],
            [
                'id_alat'=>01,
                'id_kategori'=>01,
                'id_jenis'=>01,
                'nama_alat'=>'Peralatan Makan',
                'foto_alat'=>'',
                'merk_alat'=>'',
                'stok_alat'=>''
            ],
            [
                'id_alat'=>01,
                'id_kategori'=>01,
                'id_jenis'=>01,
                'nama_alat'=>'Peralatan Makan',
                'foto_alat'=>'',
                'merk_alat'=>'',
                'stok_alat'=>''
            ],
        ];
        DB::table('alat')->insert($data);
    }
}
