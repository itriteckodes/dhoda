<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name', 'image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveCImage($value,'/images/category/');
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }   
}
