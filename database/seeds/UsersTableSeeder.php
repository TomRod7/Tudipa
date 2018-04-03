<?php

use Illuminate\Database\Seeder;
use App\User; //para poder hacer el php artisan db:seed debe estar esto llamando.

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //Con esto crearemos un usuario automanticamente.
    public function run()
    {
        User::create(
          ['name' => 'Eduardo',
          'lastname' => 'Dorado',
          'dateB' => '1991-12-17',
          'country' => 'Argentina',
          'province' => 'Buenos Aires',
          'email' => 'dorado@gmail.com',
          'password' => bcrypt('123456'),
          'admin' => true]
        );
        User::create(
          ['name' => 'Francisco',
          'lastname' => 'Maffi',
          'dateB' => '1990-06-09',
          'country' => 'Argentina',
          'province' => 'Buenos Aires',
          'email' => 'francisco@gmail.com',
          'password' => bcrypt('123456'),
          'admin' => false]
        );

    }
}
