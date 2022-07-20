<?php

namespace Database\Seeders;


use App\Models\User;
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
        \App\Models\Post::factory(3)->create(['catagory'=>'laravel orion']);
        \App\Models\Post::factory(3)->create(['catagory'=>'laravel tips']);
        \App\Models\Post::factory(3)->create(['catagory'=>'vue tips']);
        \App\Models\Post::factory(3)->create(['catagory'=>'coding architecure']);
        \App\Models\Post::factory(3)->create(['catagory'=>'coding in the mind']);
        User::create([
            'name'=>'test',
            'email'=>'test@test.com',
            'password'=>bcrypt('password')
        ]);

    }
}
