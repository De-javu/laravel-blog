<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Andres Pardo';
        $user->email = 'andrespardo5151@gmail.com';
        $user->password = bcrypt('12345678') ;

        $user->save();


        User::factory(10)->create();
    

        $user->save();

    }
}
