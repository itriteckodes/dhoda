<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveProductImage($value,'/images/product_category/');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }   
}
