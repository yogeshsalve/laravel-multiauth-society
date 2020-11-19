<?php

    namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class member extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'member';

        protected $fillable = [
            'name', 'email','flat_no','contact_no', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }