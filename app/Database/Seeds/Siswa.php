<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Siswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'alif',
                'nim' => '2017051044',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'renal',
                'nim' => '2017051050',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama' => 'bima',
                'nim' => '2017051090',
                'create_at' => date('Y-m-d H:i:s'),
                'update_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('siswa')->insertBatch($data);
    }
}
