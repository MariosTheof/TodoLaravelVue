<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'id' => 1,
                'text' => 'Groceries',
                'completed' => 0,
                'tag' => 'green'
            ],
            [
                'id' => 2,
                'text' => 'Hire Marios',
                'completed' => 0,
                'tag' => 'blue'
            ],
            [
                'id' => 3,
                'text' => 'Gym',
                'completed' => 1,
                'tag' => 'blue'
            ]
        ]);
    }
}
