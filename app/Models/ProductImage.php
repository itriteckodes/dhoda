<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'image'
    ];

    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/images/products/');
    }
    public function getImageAttribute($value){
        return asset($value);
    }
}
