<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masterauth extends Authenticatable
{
    protected $guard = 'masterauth';
    protected $table = 'masterauth';

    protected $fillable = ['name', 'email', 'paswword'];

    protected $hidden = ['password'];
}
