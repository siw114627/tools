<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'sujun',
            'email' => 'sujun@qq.com',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'sujun',
            'email' => 'sujun@qq.com',
            'password' => '123456',
        ]);
    }
}
