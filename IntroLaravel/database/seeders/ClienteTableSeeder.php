<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Clientes')->insert([
            [
                'nombre'=>'Gabriel',
                'apellido'=>'Manzano',
                'correo'=>'gabriel.mzn.r@gmail.com',
                'telefono'=>'5564305252'
            ],
            [
                'nomrbre'=>'Miguel',
                'apellido'=>'Perusquia',
                'correo'=>'miguel.perusiquia@gmail.com',
                'telefono'=>'5597052121'
            ],
            [
                'nomrbre'=>'Yahir',
                'apellido'=>'Contreras',
                'correo'=>'yahir.contreras@gmail.com',
                'telefono'=>'4421336890'
            ]]);
    }
}
