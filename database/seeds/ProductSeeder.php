<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate([
        	'name' => 'case a30',
        	'price' => 10000,
        	'detail' => 'Case samsung a30 custom',
        	'photo' => 'a30.png'
        ]);
    }
}
