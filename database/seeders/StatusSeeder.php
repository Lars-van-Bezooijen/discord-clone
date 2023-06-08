<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'Online',
        ]);

        Status::create([
            'name' => 'Do Not Disturb',
        ]);

        Status::create([
            'name' => 'Offline',
        ]);
    }
}
