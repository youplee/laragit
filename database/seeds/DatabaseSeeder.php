<?php

use Illuminate\Database\Seeder;

use App\Category;

use App\Menu;

use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(Category::class,6)->create();

        factory(Menu::class, 10)->create();

        factory(Tag::class, 10)->create();

    }
}
