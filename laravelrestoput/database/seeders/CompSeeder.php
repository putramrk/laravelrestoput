<?php

namespace Database\Seeders;

use App\Models\Comp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comp::create([
            'name'              => 'Putra Resto',
            'address'           => 'Jl jetis kulon No 8',
            'telp'              => '082197817837',
            'wa'                => '6282197817837',
            'ig'                => 'putraresto',
            'fb'                => 'putraresto',
            'footer_struk'      => 'Murah Enak Berkualitas',
            'tax'               => 'yes',
        ]);
    }
}
