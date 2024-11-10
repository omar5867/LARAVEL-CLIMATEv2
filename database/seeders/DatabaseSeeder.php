<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table("puntos")->insert([
            'ubicacion'=>'seeder',
            'descripcion'=>'Introducdo con el seeder',
            'estado'=>'activo',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table("datos")->insert([
            'punto'=>'seeder',
            'temperatura'=> 0,
            'humedad'=> 0,
            ]);
    }
}
