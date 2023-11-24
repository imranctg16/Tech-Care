<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->delete();
        foreach($this->getUserList() as $user)
        {
            User::create($user);
        }
    }


    private function getUserList(){
        return [
            [
                'email'=>'tech_care1@example.com',
                'name'=>'tech_care1@example.com',
                'password'=> Hash::make('Test@135')
            ],
            [
                'email'=>'tech_care2@example.com',
                'name'=>'tech_care2@example.com',
                'password'=> Hash::make('Test@135')
            ],
            [
                'email'=>'tech_care3@example.com',
                'name'=>'tech_care3@example.com',
                'password'=> Hash::make('Test@135')
            ],
            [
                'email'=>'tech_care4@example.com',
                'name'=>'tech_care4@example.com',
                'password'=> Hash::make('Test@135')
            ],
            [
                'email'=>'tech_care5@example.com',
                'name'=>'tech_care5@example.com',
                'password'=> Hash::make('Test@135')
            ],
        ];
    }
}
