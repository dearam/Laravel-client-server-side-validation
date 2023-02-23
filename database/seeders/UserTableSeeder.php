<?php

namespace Database\Seeders;
use App\Models\Userdetail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Userdetail::factory()->count(1000)->create();
    }
}
