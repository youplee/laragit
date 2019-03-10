<?php

use Illuminate\Database\Seeder;
use App\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Menu::class, 10)->create();
    }
}
