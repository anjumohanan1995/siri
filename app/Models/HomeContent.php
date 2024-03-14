<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class HomeContent extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'panel_one_title',
        'panel_one_subtitle',
        'panel_one_bgimag',
        'panel_one_link',
        'panel_one_link_label',

        'panel_two_description',
        'panel_two_image',

        'panel_three_title',
        'panel_three_subtitle',

        'panel_four_title',
        'panel_four_description',
        'panel_four_image',

        'panel_five_title',
        'panel_five_description',
        'panel_five_video',

        'panel_six_title',
        'panel_six_description',
        'panel_six_image',

        'panel_seven_title',
        'panel_seven_description',
        'panel_seven_image',
        'panel_seven_link',
        'panel_seven_link_label',

        'created_by'
        // Add other fillable attributes here if needed
    ];

}
