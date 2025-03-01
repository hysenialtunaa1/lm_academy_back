<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaswordResetToken extends Model
{
    protected $fillable = [
        'email', 'token'
    ];
}
