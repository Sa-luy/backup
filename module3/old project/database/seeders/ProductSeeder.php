<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<10;$i++)

        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'productType' => Str::random(10),
            
            
            // 'password' => Hash::make('password'),
        ]);
    
    }
    
}