<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class ContactUs extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        // Add other fillable attributes here if needed
    ];

}
