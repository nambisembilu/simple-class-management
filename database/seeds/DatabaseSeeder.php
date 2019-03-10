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
        DB::table('users')->insert([
            'name' => 'Admin Staff',
            'email' => 'admin@kilk.co',
            'password' => bcrypt('1234567890'),
        ]);

        factory(App\User::class, 10)->create();

        factory(App\Teachers::class, 10)->create();

        factory(App\Students::class, 50)->create();

        factory(App\Classes::class, 10)->create();
    }
}
