<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $collection = 'sliders';

    protected $fillable = [
        'slider_category_id', 
        'title', 
        'image',
        'button_text',
        'button_url',
        'button_one_text',
        'button_one_url',
        'button_status',
        'slider_style',
        'color',
        'slider_status',
    ];
}
