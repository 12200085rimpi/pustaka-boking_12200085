<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'rimpi',
                'password'  => md5('12200085')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200085',
                'password'  => md5('rimpi')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}