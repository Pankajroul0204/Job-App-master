<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminInsert extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'contact'=>1234567890,
            'password'=>Hash::make('admin12345'),
            'gender'=>'Male',
            'address'=>'BBSR',
            'role'=>'Admin'
        ]);
    }
}
