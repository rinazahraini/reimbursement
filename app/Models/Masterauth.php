<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masterauth extends Authenticatable
{
    protected $guard = 'masterauth';
    protected $table = 'masterauths';

    protected $fillable = ['masterauth_id', 'name', 'email', 'paswword', 'nik'];

    protected $hidden = ['password'];
}
