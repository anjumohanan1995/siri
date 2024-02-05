<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Approach extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
      
    protected $collection = 'approach';  
    protected $fillable = [
        'title','sub_title1','slug', 'sub_title', 'content','title1','content1','title2','content2','image','image1','banner_image'
    ];
}
