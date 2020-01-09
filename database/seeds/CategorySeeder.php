<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$category = [
    		'case', 'kaos', 'hoody', 'flashdisk', 'mug', 'powerbank', 'topi', 'tumblr'
    	]; 

    	foreach ($category as $name) {
	        Category::firstOrCreate([
	        	'name' => $name
	        ]);
    	}
    }
}
