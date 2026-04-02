<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    protected $fillable = [
        'page_url',
        'title',
        'meta_description',
        'other_tags',
        'is_active',
    ];
}
