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
        //
        DB::table('products')->insert([
            'name' => 'Keychron 87',
            'category_id' =>'1',
            'price' => '50000',
            'description' => 'best',
            'image' => '/storage/87Keyboard.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Logitech 87',
            'category_id' =>'1',
            'price' => '500000',
            'description' => 'top',
            'image' => '/storage/87Keyboard.jpg'
        ]);
    }
}
