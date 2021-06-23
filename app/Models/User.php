<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use App\Models\Withdraw;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory; 

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email', 'password','status','code','address','image', 'verification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'a_date' => 'date',
    ];
    public function setPasswordAttribute($value){
        if (!empty($value)){
            $this->attributes['password'] = Hash::make($value);
        }
    }
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveAImage($value,'/images/profile/');
    }
    public function orders(){
        return $this->hasMany(Order::class,'user_id');
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }  
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }  
    public function messages()
    {
        return $this->hasMany(ChatMessage::class,'user_id');
    }
    
}
