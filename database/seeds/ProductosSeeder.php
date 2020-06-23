<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                'nombre' => 'monitor 24',
                'descripcion' => 'monitor de 24 pulgadas LCD',
                'precio' => 20.5,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'mouse Antryx',
                'descripcion' => 'Mouse Gamer Marca Antryx',
                'precio' => 60.7,
                'created_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Teclado Antryx',
                'descripcion' => 'Teclado gamer RGB Antryx XB345 ergonómico',
                'precio' => 20.5,
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('productos')->insert($productos);
    }
}
