<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CMinhas chamadas de seeders aqui
        $this->call([
            TaskSeeder::class,
            PeopleSeeder::class,
            // caso eu queira incluir outros seeders no futuro
        ]);
    }
}
