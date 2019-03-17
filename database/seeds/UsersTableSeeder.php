<?php
/**
 * Created by PhpStorm.
 * User: asoft
 * Date: 14.03.2019
 * Time: 00:57
 */

class UsersTableSeeder
{
    public function __construct()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('24049898'),
        ]);
    }

}
