<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalScript extends Model
{
    protected $fillable = [
        'header_scripts',
        'body_scripts',
        'footer_scripts',
    ];
}
