<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Models\TodoList;

class TodolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoList::factory()->count(3)->create();
    }
}
