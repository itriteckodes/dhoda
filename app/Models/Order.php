<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'name', 
        'email', 
        'address',
        'phone',
        'qty',
        'status',
        'country',
        'city',
        'district',
        'amount',
        'order_code',
        'postal_code',
        'note',
        'payment_method'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

   
    public function items(){
        return $this->hasMany(OrderItem::class,'order_id');
    }
    public static function pending(){
        return (new static)::where('status','pending')->get();
    }
    public static function completed(){
        return (new static)::where('status','completed')->get();
    }
}
