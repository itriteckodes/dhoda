<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory; 

    protected $fillable = [
        'title', 'image','description','category_id','admin_id','views','name'
    ];
    protected $dates =['created_at' ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/images/blog/');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }  
    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }  
    public function tags()
    {
        return $this->hasMany('App\Models\Tag','blog_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment','blog_id');
    }
}
