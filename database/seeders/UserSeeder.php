<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('username','tulasi')->first();
        if(is_null($user)){
            $user = new User();
            $user->firstname = "tulasi";
            $user->lastname = "tulasi";
            $user->username = "tulasi";
            $user->password = Hash::make('tulasi@123');
            $user->save();
        }
    }
}
