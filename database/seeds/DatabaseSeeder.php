<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([

            [
                'name' => 'Admin 1',
                'email' => 'admin@gmail.com',
                'role' => '1',
                'phone' => '+60114303345',
                'address' => 'Kajang,Malaysia',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'role' => '0',
                'phone' => '+60114303345',
                'address' => 'Kajang,Malaysia',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@gmail.com',
                'role' => '0',
                'phone' => '+60114303345',
                'address' => 'Kajang,Malaysia',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Trainer 1',
                'email' => 'trainer1@gmail.com',
                'role' => '2',
                'phone' => '+60114303345',
                'address' => 'Kajang,Malaysia',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Trainer 2',
                'email' => 'trainer2@gmail.com',
                'role' => '2',
                'phone' => '+60114303345',
                'address' => 'Kajang,Malaysia',
                'password' => bcrypt('123456'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
