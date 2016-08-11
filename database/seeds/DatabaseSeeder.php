<?php

use Illuminate\Database\Seeder;
Use App\User;

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

        User::create([
            'name' => "admin",
            'email' => "notificaciones.ch@advanzer.com",
            'password' => Hash::make("admin"),
        ]);
    }
}
