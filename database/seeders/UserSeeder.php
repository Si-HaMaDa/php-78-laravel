<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!\App\Models\User::where('email', 'admin@admin.com')->first())
            \App\Models\User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
            ]);

        \App\Models\User::factory(10)->create();
    }
}
