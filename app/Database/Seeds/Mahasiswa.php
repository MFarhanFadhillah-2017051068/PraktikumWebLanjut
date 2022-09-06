<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Makasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [ 
            'npm' => '2017051068',   
            'nama'    => 'M. Farhan Fadhillah',
            'alamat' => 'Pramuka',
            'created_at' => Time::now()
        ],
        [ 
            'npm' => '2017051007',   
            'nama'    => 'Muhammad Faiz',
            'alamat' => 'Gedong Aer',
            'created_at' => Time::now()
        ],        [ 
            'npm' => '2017051060',   
            'nama'    => 'Ahmad A l Farizie',
            'alamat' => 'Madukuro',
            'created_at' => Time::now()
        ],


        ];

        // Simple Queries
        // $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
