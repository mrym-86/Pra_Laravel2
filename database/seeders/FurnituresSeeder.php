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
                'file_name'=>'item1.jpg',
                'file_path'=>'resources/image'
            ],
            [
                'name'=>'item_2',
                'price'=>'100000',
                'details'=>'黒のソファーです。',
                'file_name'=>'item2.jpg',
                'file_path'=>'resources/image'
            ],
            [
                'name'=>'item_3',
                'price'=>'50000',
                'details'=>'木でできたテーブルです。',
                'file_name'=>'item3.jpg',
                'file_path'=>'resources/image'
            ],
            [
                'name'=>'item_4',
                'price'=>'20000',
                'details'=>'間接照明です。',
                'file_name'=>'item4.jpg',
                'file_path'=>'resources/image'
            ],
            [
                'name'=>'item_5',
                'price'=>'100000',
                'details'=>'茶色のソファーです。',
                'file_name'=>'item5.jpg',
                'file_path'=>'resources/image'
            ]

            ]);
    }
}
