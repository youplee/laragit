<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Menu;
||||||| merged common ancestors
=======
use App\Tag;
>>>>>>> 537d8ce0425cbaf4c15148ff5b8a8c231fa6dc66

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(Menu::class, 10)->create();
||||||| merged common ancestors
        // $this->call(UsersTableSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
        factory(Tag::class, 10)->create();
>>>>>>> 537d8ce0425cbaf4c15148ff5b8a8c231fa6dc66
    }
}
