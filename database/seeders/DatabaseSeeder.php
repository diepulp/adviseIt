<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Factories\PlanFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        $user = User::factory()->create([
            'name' => "Tyler Hang",
            'email' => 'tyler@gmail.com'
        ]);

        Plan::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
