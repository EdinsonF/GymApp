<?php

use Illuminate\Database\Seeder;

class tipo_usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuario')->insert([
            'tipo_usuario' => 'ADMINISTRADOR',
            
        ]);
    }
}
