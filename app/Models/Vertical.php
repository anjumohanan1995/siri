<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Vertical extends Model
{
    use HasFactory;
    
    protected $collection = 'verticals';  
    protected $fillable = [
        'title','title1','slug', 'sub_title', 'content','status','image','banner_image'
    ];
  
}
