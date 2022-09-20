<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'nama_lengkap' => 'ini akun level admin',
            'level' => 'admin',
            'email' => 'arif@gmail.com',
            'password' => bcrypt('arif123')
        ],
        [
            'nama_lengkap' => 'ini akun level admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ],
        [
            'nama_lengkap' => 'ini akun level admin',
            'level' => 'admin',
            'email' => 'reza@gmail.com',
            'password' => bcrypt('reza123')
        ],
        ];
        foreach ( $user as $key => $value ){
            User::create($value);
        }
    }
}
