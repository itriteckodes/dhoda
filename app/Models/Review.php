<?php

namespace App\Models;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name','city', 'email','message','rating','product_id'
    ];
    // public function setImageAttribute($value){
    //     $this->attributes['image'] = ImageHelper::saveRImage($value,'/profile/');
    // }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
