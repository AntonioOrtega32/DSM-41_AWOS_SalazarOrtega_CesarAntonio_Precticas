<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Client;
use App\Models\Detail;
use App\Models\Product;
use App\Models\User;
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
        Category::factory(10)->create();
        Client::factory(10)->create();
        Product::factory(10)->create();
        Detail::factory(10)->create();
    }
}
