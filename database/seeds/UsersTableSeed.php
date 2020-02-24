<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        [
            'name'=>'Lê Huy Điệp',
            'email'=>'dieplh.elite@gmail.com',
            'password'=>Hash::make('123456'),
        ],
        [
            'name'=>'Thu Hoai',
            'email'=>'thuhoai@gmail.com',
            'password'=>Hash::make('123456'),
        ],
        [
            'name'=>'Khach',
            'email'=>'khach@gmail.com',
            'password'=>Hash::make('123456'),
        ],
    ];
        DB::table('users')->insert($data);
    }
}
