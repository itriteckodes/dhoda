<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image','stock','detail','category_id','price'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/images/products/');
    }
    public function category(){
        return $this->belongsTo(ProductCategory::class,'category_id');
    }  

    public function images(){
        return $this->hasMany(ProductImage::class,'product_id');
    }
}
