<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name','email','comment','blog_id','image','subject','phone'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveCImage($value,'/images/comment/');
    }
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    } 
}
