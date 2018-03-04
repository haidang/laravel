<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(mn_configsSeeder::class);
        $this->call(mn_modulesSeeder::class);
        $this->call(usersDepartmentsSeeder::class);
        $this->call(usersSubDepartmentsSeeder::class);
        $this->call(usersTitlesSeeder::class);
        $this->call(usersRolesSeeder::class);
        $this->call(usersSeeder::class);
    }
}
