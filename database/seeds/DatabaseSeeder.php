<?php

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
//        $this->call(CompaniesTableSeeder::class);
//        factory(App\company::class, 100)->create();
//
        $this->call(NewsTableSeeder::class);
        factory(App\News::class, 100)->create();
//
//        // Role comes before User seeder here.
//        $this->call(RoleTableSeeder::class);
//        // User seeder will use the roles above created.
//        $this->call(UserTableSeeder::class);
    }
}