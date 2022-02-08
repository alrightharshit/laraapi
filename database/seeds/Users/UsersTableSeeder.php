<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 1)->create()->each(function($user) {
            $user->assignRole('Admin');
        });
        factory(\App\Models\User::class, 1)->create()->each(function($user) {
            $user->assignRole('Member');
        });
        factory(\App\Models\User::class, 1)->create()->each(function($user) {
            $user->assignRole('Users');
        });
    }
}
