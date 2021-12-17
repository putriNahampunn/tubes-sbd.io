<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('admins')->truncate();

        \DB::table('admins')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('pasword1')
            ],
            
        ]);
    }

    /* INSERT INTO admins(name, email, password, remember_token) 
        VALUES('admin1','admin1@gmail.com','pasword1');*/
}
