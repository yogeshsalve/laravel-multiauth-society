<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Admin extends Model
// {
//     use HasFactory;
// }
class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'society_id','society_name','name', 'email','flat_no','contact_no', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }