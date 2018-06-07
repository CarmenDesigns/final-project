<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                $role_seeker = new Role();
                $role_seeker->name = ‘seeker’;
                $role_seeker->description = ‘A seeker User’;
                $role_seeker->save();

                $role_company = new Role();
                $role_company->name = ‘company’;
                $role_company->description = ‘A company User’;
                $role_company->save();
    }
}

