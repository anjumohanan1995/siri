<?php

namespace App;




use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use AuthenticatableTrait;
    use SoftDeletes;


    protected $collection = 'users';

    /**
     * The attributes which are mass assigned will be used.
     *
     * It will return @var array
     */
    protected $fillable = [
        'application_number','name', 'email', 'password','mobile','role','aadhar_number','dob','gender','father_name','mother_name','caste','id_proof','id_proof_details','district','teo_name', 'bank_name','account_no','passbook','ifsc_code'
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];

     protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
