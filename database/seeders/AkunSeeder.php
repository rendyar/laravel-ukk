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
            'nama_lengkap' => 'ini akun admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ],
        [
            'nama_lengkap' => 'ini akun user',
            'level' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ],
        ];
        foreach ( $user as $key => $value ){
            User::create($value);
        }
    }
}
