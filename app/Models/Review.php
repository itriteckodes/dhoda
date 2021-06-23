<?php

namespace App\Models;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory; 

    // protected $fillable = [
    //     'name', 'p_name','amount','star','message','image'
    // ];
    // public function setImageAttribute($value){
    //     $this->attributes['image'] = ImageHelper::saveRImage($value,'/profile/');
    // }
}
