<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected const ADMIN = 1;
    protected const ADMIN_SUB = 2;

    protected $fillable = ['name','email','password', 'role'];
    protected $hidden = ['password', 'remember_token'];

    public function isAdmin() {
        return $this->role === self::ADMIN;
    }

    public function isAdminSub(){
        return $this->role === self::ADMIN_SUB;
    }

    public function getRole(){
        return $this->role === self::ADMIN ? "Admin" : "Sub Admin";
        // return "admin";
    }
}
