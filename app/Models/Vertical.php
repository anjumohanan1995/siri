<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Vertical extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
      
    protected $collection = 'verticals';  
    protected $fillable = [
        'title','title1','slug', 'sub_title', 'content','status','image','banner_image'
    ];
  
}
