<?php

namespace App;
use App\ProductPhotos;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'photo', 'price',
    ];
    public function photos(){
    	return $this->hasMany(ProductPhotos::class);
    }
}
