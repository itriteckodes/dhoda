<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_id',
        'payment_method',
        'amount',
        'status',
        'transaction_id',
        'image'
    ];

    public function setImageAttribute($value){
        if(is_string($value)){
            $this->attributes['image'] = ImageHelper::saveImageFromApi($value,'images/deposits'); 
        }

        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveBImage($value,'/images/transaction/'); 
        }
        
    }

    public function getImageAttribute($value){
        return asset($value);
    }
}
