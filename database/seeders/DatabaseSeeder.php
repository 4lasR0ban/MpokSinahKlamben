<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Event;
use App\Models\Umkm;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Hardiansyah',
            'username' => 'ardian',
            'email' => 'ardian@gmail.com',
            'password' => bcrypt('password')
        ]);

        Post::factory(20)->create();

        Event::factory(20)->create();

        Umkm::factory(20)->create();
    }
}
