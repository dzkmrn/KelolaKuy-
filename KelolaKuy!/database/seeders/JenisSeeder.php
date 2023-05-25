<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
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
                'id_jenis'=>01,
                'jenis_alat'=>'Peralatan Makan',
                'deskripsi_jenis'=>'',
            ],
            [
                'id_jenis'=>02,
                'jenis_alat'=>'Peralatan Tidur',
                'deskripsi_jenis'=>'',
            ],
            [
                'id_jenis'=>03,
                'jenis_alat'=>'Kebutuhan Lain',
                'deskripsi_jenis'=>'',
            ],
            [
                'id_jenis'=>04,
                'jenis_alat'=>'Peralatan Kebersihan',
                'deskripsi_jenis'=>'',
            ],
            [
                'id_jenis'=>05,
                'jenis_alat'=>'Peralatan Keselamatan',
                'deskripsi_jenis'=>'',
            ],
        ];
        DB::table('jenis')->insert($data);
    }
}
