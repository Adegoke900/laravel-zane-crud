<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     * 
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\product::factory(50)->create();
        //$this->call(ProductSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
