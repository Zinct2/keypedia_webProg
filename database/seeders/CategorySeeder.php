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
            'name' => '87 Key Keyboard',
            'image' => '/storage/87Keyboard.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => '61 Key Keyboard',
            'image' => '/storage/87Keyboard.jpg'
        ]);
        //
    }
}
