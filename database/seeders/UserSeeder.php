<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
     Contact,
     User
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
             'name' =>"ashokkked",
             'email' =>"ashokkked@gmail.com",
             'password' =>bcrypt("123123123"),
        ]);
        Contact::create([
            'user_id' =>"1",
            'phone_no' =>"022 7878 2323",
            'address' =>"mumbai",
        ]);
    }
}
