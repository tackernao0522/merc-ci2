<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user_seeds = [
            [
                'name' => 'test01',
                'email' => 'test@test.test',
                'email_verified_at' => now(),
                'password' => Hash::make('testtest'),
            ],
            [
                'name' => 'test02',
                'email' => 'test02@test.test',
                'email_verified_at' => now(),
                'password' => Hash::make('testtest02'),
            ],
        ];
        foreach ($user_seeds as $user) {
            DB::table('users')->insert($user);
        }
    }
}
