<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    public function index()
    {
        $settings = SeoSetting::latest()->paginate(10);
        return view('admin.seo.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_url' => 'required|string|max:255|unique:seo_settings,page_url',
            'title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'other_tags' => 'nullable|string',
            'is_active' => 'nullable',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        SeoSetting::create($data);

        return redirect()->route('admin.seo-settings.index')->with('success', 'SEO Setting created successfully!');
    }

    public function edit(SeoSetting $seoSetting)
    {
        return view('admin.seo.edit', compact('seoSetting'));
    }

    public function update(Request $request, SeoSetting $seoSetting)
    {
        $request->validate([
            'page_url' => 'required|string|max:255|unique:seo_settings,page_url,' . $seoSetting->id,
            'title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'other_tags' => 'nullable|string',
            'is_active' => 'nullable',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        $seoSetting->update($data);

        return redirect()->route('admin.seo-settings.index')->with('success', 'SEO Setting updated successfully!');
    }

    public function destroy(SeoSetting $seoSetting)
    {
        $seoSetting->delete();
        return redirect()->route('admin.seo-settings.index')->with('success', 'SEO Setting deleted successfully!');
    }
}
