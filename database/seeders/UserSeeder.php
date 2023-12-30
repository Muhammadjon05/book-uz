<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userDatas = [
            ['name' => 'John', 'email' => 'john.doe@example.com', 'password' => bcrypt('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Jane', 'email' => 'jane.doe@example.com', 'password' => bcrypt('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Alice', 'email' => 'alice.smith@example.com', 'password' => bcrypt('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Bob', 'email' => 'bob.johnson@example.com', 'password' => bcrypt('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name' => 'Eva', 'email' => 'eva.brown@example.com', 'password' => bcrypt('password'),'created_at'=>now(),'updated_at'=>now()],
        ];
        foreach ($userDatas as $data ){
            User::create($data);
        }
    }
}
