<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Category;
=======
use App\Tag;

>>>>>>> 6a5ef6912367644b0e1c5d9e1a7cb547c813d626
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
        // $this->call(UsersTableSeeder::class);
        factory(Tag::class, 10)->create();
    }
}
