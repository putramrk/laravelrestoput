<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name'              => 'Putra',
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('admin12345'),
            'wa'                => '6282197817837',
            'address'           => 'Surabaya',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
        $admin->assignRole('admin');

        $kasir = User::create([
            'name'              => 'Sam',
            'email'             => 'kasir@gmail.com',
            'password'          => Hash::make('kasir12345'),
            'wa'                => '6282197817837',
            'address'           => 'Surabaya',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
        $kasir->assignRole('kasir');

        // $all = User::factory(5)->create();

        // foreach ($all as $a) {
        //     $a->assignRole('kasir');
        // }
    }
}
