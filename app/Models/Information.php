<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory; 

    protected $fillable = [
        'phone','image','email','about','address','terms','privacy','facebook','instagram','twitter',
        'linkedin','banner_text'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveIImage($value,'/images/information/');
    }
}
