<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beverage = DB::table('categories')
            ->select('id')
            ->where('name', 'Beverage')
            ->first();

        $dairy = DB::table('categories')
            ->select('id')
            ->where('name', 'Dairy')
            ->first();

        $household_cleaning = DB::table('categories')
            ->select('id')
            ->where('name', 'Household Cleaning')
            ->first();

        $paper_goods = DB::table('categories')
            ->select('id')
            ->where('name', 'Paper Goods')
            ->first();

        $personal_care = DB::table('categories')
            ->select('id')
            ->where('name', 'Personal Care')
            ->first();

        DB::table('products')->insert([
            [
                'category_id' => $beverage->id,
                'name' => 'beer',
                'description' => 'cold',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Sprite',
                'description' => 'yummy',
                'quantity' => 10,
                'price' => 10
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Water',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Tea',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Juice',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Coke',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Energy Drink',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Coffee',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Pepsi',
                'description' => 'cold',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $beverage->id,
                'name' => 'Mocktail',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
        ]);

        DB::table('products')->insert([
            [
                'category_id' => $dairy->id,
                'name' => 'Milk',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Butter',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Cheese',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Yogurt',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Ice cream',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Whey',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Casein',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Yakult',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Condensed milk',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $dairy->id,
                'name' => 'Cream',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
        ]);

        DB::table('products')->insert([
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Vacuum cleaner',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Microfiber cloths',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Bucket',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
            ,[
                'category_id' => $household_cleaning->id,
                'name' => 'Broom',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
            ,[
                'category_id' => $household_cleaning->id,
                'name' => 'Dustpan',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Flat mop',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Rubber gloves',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Squeegee',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Toilet brush and holder',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $household_cleaning->id,
                'name' => 'Dish soap',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
        ]);

        DB::table('products')->insert([
            [
                'category_id' => $paper_goods->id,
                'name' => 'Paper napkins',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Paper towels',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Toilet tissue',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Facial tissue',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Kraft bag',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Paperboard',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Containerboard',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Envelope',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Notebook',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $paper_goods->id,
                'name' => 'Playing cards',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
        ]);

        DB::table('products')->insert([
            [
                'category_id' => $personal_care->id,
                'name' => 'Skin moisturizer',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Perfume',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Lipsticks',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],[
                'category_id' => $personal_care->id,
                'name' => 'Fingernail polisher',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Eye and facial makeup',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Shampoo',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Hair color',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Toothpaste',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Deodorant',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ],
            [
                'category_id' => $personal_care->id,
                'name' => 'Mouthwash',
                'description' => 'desc',
                'quantity' => 10,
                'price' => 50
            ]
        ]);
    }
}
