<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200085;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200085 extends Seeder
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

        $p = new Pengguna12200085();
        $p->insertBatch($data);
    }
}