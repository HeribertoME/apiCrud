<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $cantidadUsuarios = 10;
        factory(User::class, $cantidadUsuarios)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
