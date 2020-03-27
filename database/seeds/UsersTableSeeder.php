<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        DB::table('users')->delete();
        DB::table('role_user')->delete();

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'phone_number' => '01630811624',
            'password' => Hash::make('123456789')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@gmail.com',
            'phone_number' => '01630811624',
            'password' => Hash::make('123456789')
        ]);

        $generic_user = User::create([
            'name' => 'Generic User',
            'email' => 'user@gmail.com',
            'phone_number' => '01630811624',
            'password' => Hash::make('123456789')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $generic_user->roles()->attach($userRole);
    }
}
