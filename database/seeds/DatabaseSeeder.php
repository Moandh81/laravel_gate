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
        // $this->call(UserSeeder::class);


        // Role seeder must be called before user seeder due to the relationship
        // between the two entities 
     $this->call(RoleSeeder::class);
     $this->call(UserSeeder::class);
     $this->call(PostSeeder::class);

    }
}
