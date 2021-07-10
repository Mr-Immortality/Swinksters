<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(1)->hasProfile()->hasPosts(5)->create();
        // \App\Models\Comment::factory(0)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
        \App\Models\Role::factory()->hasUsers(10)->create();
        \App\Models\Room::factory(3)->create();
    }
}
