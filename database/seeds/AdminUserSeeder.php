<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@jasamedika.com',
            'password' => bcrypt('admin')
        ]);

        $user->assignRole('admin');

        $operator = User::create([
            'name' => 'operator',
            'email' => 'operator@jasamedika.com',
            'password' => bcrypt('operator')
        ]);

        $operator->assignRole('operator');
    }
}
