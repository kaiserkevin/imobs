<?php

use Illuminate\Database\Seeder;
use App\User;

class LoginSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        new User();
        $usuario->email = "kaiserkevin010@gmail.com";
        $usuario->password = bcrypt("12345");
        $usuario->save();
    }
}
