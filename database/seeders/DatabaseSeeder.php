<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
           'name' => Str::random(4),
           'email' => Str::random(4).'@gmail.com',
           'password' => Hash::make('password'),
           'tipo' => 'admin',
       ]);

    }
}
