<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Post::factory(10)->create();

        \App\Models\AdminUser::factory(1)->create([
            "name" => "Coach",
            "email" => "atlant@wrestling.com",
            "password" => bcrypt("Atlant@83"),
        ]);
    }
}
