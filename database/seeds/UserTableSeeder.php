<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Admin";
        $user->country = "Canada";
        $user->phone = "12345678";
        $user->email = "admin@example.com";
        $user->password = Hash::make("secret");
        $user->is_admin = true;
        $user->save();
    }
}