<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Work::factory(40)->create();

        foreach(range(1, 120) as $index)
        {
            \DB::table('works_has_tags')->insert([
                'tag_id' => rand(1,10),
                'work_id' => rand(1, 40)
            ]);
        }
    }
}
