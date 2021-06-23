<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory; 
    protected $fillable = [
        'blog_id', 'tag'
    ];
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
