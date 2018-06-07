<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_seeker = Role::where(‘name’, ‘seeker’)->first();
        $role_company  = Role::where(‘name’, ‘company’)->first();

        $seeker = new User();
        $seeker->name = ‘Seeker Name’;
        $seeker->email = ‘Seeker@example.com’;
        $seeker->password = bcrypt(‘secret’);
        $seeker->save();
        $seeker->roles()->attach($role_seeker);

        $company = new User();
        $company->name = ‘Company Name’;
        $company->email = ‘company@example.com’;
        $company->password = bcrypt(‘secret’);
        $company->save();
        $company->roles()->attach($role_company);
  }
}
