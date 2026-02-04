<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'url',
        'parent_id',
        'icon',
        'description',
        'menu_type',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the parent menu item
     */
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * Get the child menu items
     */
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }

    /**
     * Get active children
     */
    public function activeChildren()
    {
        return $this->children()->where('is_active', true);
    }

    /**
     * Scope for main menu items
     */
    public function scopeMainMenu($query)
    {
        return $query->whereNull('parent_id')->where('is_active', true)->orderBy('order');
    }

    /**
     * Scope for specific menu type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('menu_type', $type);
    }
}
