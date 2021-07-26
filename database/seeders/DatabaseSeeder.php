<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
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
        User::factory(10)->create();
//        News::factory(15)->create();
    }
}
