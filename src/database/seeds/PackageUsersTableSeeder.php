<?php

use Illuminate\Database\Seeder;

class PackageUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'email' => 'admin@admin.ru',
                'email_verified_at' => now(),
                'password' => bcrypt('111111'),
                'remember_token' => \Illuminate\Support\Str::random(64),
                'created_at' => now()
            ],

            [
                'name' => 'Manager',
                'email' => 'manager@manager.ru',
                'email_verified_at' => now(),
                'password' => bcrypt('222222'),
                'remember_token' => \Illuminate\Support\Str::random(64),
                'created_at' => now()
            ]
        ]);
    }
}
