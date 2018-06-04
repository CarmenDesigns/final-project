<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies', 50)->insert([
            'name' => str_random(10),
            'description' => str_random(255),

        ]);

    }
}
