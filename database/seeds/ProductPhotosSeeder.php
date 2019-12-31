<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = Product::all();
    	$no = 1;
    	foreach ($products as $product) {
	        $product->photos()->firstOrcreate([
	        	'name' => 'softcase0'. $no++ . '.png'
	        ]);
    	}
    }
}
