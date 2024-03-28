<?php

namespace App;

  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Settings extends Model
{
    
    use SoftDeletes;
    
    protected $collection = 'settings';  



    protected $fillable = [
        'logo',
        'project_title',
        'mobile',
        'mobile_one',
        'email',
        'address',
        'copy_right',
        'favicon',
        'language','banner_image','footer_logo','preloader_logo'
        
    ];
}


