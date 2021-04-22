<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            'codigo' => 'COD01',
            'descripcion' => 'Coca Cola 1,5lts',
            'cantidad' => '15',
            'precio' => '140'
        ]);

        DB::table('articulos')->insert([
            'codigo' => 'COD02',
            'descripcion' => 'Cerveza Patagonia',
            'cantidad' => '20',
            'precio' => '150'
        ]);

        DB::table('articulos')->insert([
            'codigo' => 'COD03',
            'descripcion' => 'Mayonesa Hellmans',
            'cantidad' => '100',
            'precio' => '90'
        ]);
    }
}
