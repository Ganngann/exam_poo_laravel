<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieSeeder::class,
            ClientSeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            WorkSeeder::class,
            // works_has_tagsSeeder::class,
        ]);
    }
}
