<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FurnituresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('furnitures')->insert([

            [
                'name'=>'item_1',
                'price'=>'50000',
                'details'=>'黒い椅子です。',
                'image'=>'item1.jpg',
                'image_path'=>'images/item1.jpg',
                'size'=>'50 × 60',
                'color'=>'Black',
                'material'=>'Wood'
            ],
            [
                'name'=>'item_2',
                'price'=>'100000',
                'details'=>'黒のソファーです。',
                'image'=>'item2.jpg',
                'image_path'=>'images/item2.jpg',
                'size'=>'100 × 80',
                'color'=>'Black',
                'material'=>'Leather'
            ],
            [
                'name'=>'item_3',
                'price'=>'50000',
                'details'=>'木でできたテーブルです。',
                'image'=>'item3.jpg',
                'image_path'=>'images/item3.jpg',
                'size'=>'70 × 80',
                'color'=>'Ivory',
                'material'=>'Wood'
            ],
            [
                'name'=>'item_4',
                'price'=>'25000',
                'details'=>'間接照明です。',
                'image'=>'item4.jpg',
                'image_path'=>'images/item4.jpg',
                'size'=>'20 × 100',
                'color'=>'Gray',
                'material'=>'Metal'
            ],
            [
                'name'=>'item_5',
                'price'=>'60000',
                'details'=>'3人掛けのソファです。',
                'image'=>'item5.jpg',
                'image_path'=>'images/item5.jpg',
                'size'=>'250 × 80',
                'color'=>'LightBrown',
                'material'=>'Leather'
            ]

            ]);
    }
}
