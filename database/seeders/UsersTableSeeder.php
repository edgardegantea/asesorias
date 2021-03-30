<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = User::create([
            'name'  => 'student',
            'apat'  => 'student',
            'amat'  => 'student',
            'email' => 'student@mail.com',
            'password'  =>bcrypt('1234')
        ]);
        $student->assignRole('student');

        $teacher = User::create([
            'name'  => 'teacher',
            'apat'  => 'teacher',
            'amat'  => 'teacher',
            'email' => 'teacher@mail.com',
            'password'  =>bcrypt('1234')
        ]);
        $teacher->assignRole('teacher');

        $admin = User::create([
            'name'  => 'admin',
            'apat'  => 'admin',
            'amat'  => 'admin',
            'email' => 'admin@mail.com',
            'password'  =>bcrypt('1234')
        ]);
        $admin->assignRole('admin');

        $root = User::create([
            'name'  => 'root',
            'apat'  => 'root',
            'amat'  => 'root',
            'email' => 'root@mail.com',
            'password'  =>bcrypt('1234')
        ]);
        $root->assignRole('root');

    }
}
