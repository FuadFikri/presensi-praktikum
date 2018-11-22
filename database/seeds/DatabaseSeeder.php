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
        // $this->call(UsersTableSeeder::class);
        $this->call(roleTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MatkulSeeder::class);
        
        $this->call(DosenSeeder::class);
    }
}
