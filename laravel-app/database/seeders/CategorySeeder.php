<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Beverage'],
            ['name' => 'Dairy'],
            ['name' => 'Household Cleaning'],
            ['name' => 'Paper Goods'],
            ['name' => 'Personal Care']
        ]);
    }
}
