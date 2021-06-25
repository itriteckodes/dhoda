<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable=[
        'image'
    ];

    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/images/gallery/');
    }
    
}
