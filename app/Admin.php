<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['name', 'email', 'password'];

    public function routeNotificationForMail()
    {
        return config('mail.admin');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
}
