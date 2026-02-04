<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the menus.
     */
    public function index()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new menu.
     */
    public function create()
    {
        $parentMenus = Menu::whereNull('parent_id')->orderBy('name')->get();
        $allMenus = Menu::orderBy('name')->get();
        return view('admin.menus.create', compact('parentMenus', 'allMenus'));
    }

    /**
     * Store a newly created menu in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menus,slug',
            'url' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'menu_type' => 'required|string|max:50',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Menu::where('parent_id', $validated['parent_id'] ?? null)->max('order');
            $validated['order'] = ($maxOrder ?? 0) + 1;
        }

        $validated['is_active'] = $request->has('is_active');

        Menu::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu created successfully!');
    }

    /**
     * Show the form for editing the specified menu.
     */
    public function edit(Menu $menu)
    {
        $parentMenus = Menu::whereNull('parent_id')->where('id', '!=', $menu->id)->orderBy('name')->get();
        $allMenus = Menu::where('id', '!=', $menu->id)->orderBy('name')->get();
        return view('admin.menus.edit', compact('menu', 'parentMenus', 'allMenus'));
    }

    /**
     * Update the specified menu in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menus,slug,' . $menu->id,
            'url' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'menu_type' => 'required|string|max:50',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $validated['is_active'] = $request->has('is_active');

        $menu->update($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu updated successfully!');
    }

    /**
     * Remove the specified menu from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully!');
    }

    /**
     * Update menu order via AJAX
     */
    public function updateOrder(Request $request)
    {
        $validated = $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|exists:menus,id',
            'items.*.order' => 'required|integer',
        ]);

        foreach ($validated['items'] as $item) {
            Menu::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true, 'message' => 'Menu order updated successfully!']);
    }
}
