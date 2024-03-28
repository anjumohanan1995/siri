<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory, SoftDeletes;
      
    protected $collection = 'approaches';  
    protected $fillable = [
        'title','sub_title1','slug', 'sub_title', 'content','title1','content1','title2','content2','image','image1','banner_image'
    ];
}
