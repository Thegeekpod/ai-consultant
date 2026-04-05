<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GlobalScript;
use Illuminate\Http\Request;

class GlobalScriptController extends Controller
{
    public function index()
    {
        $script = GlobalScript::first();
        return view('admin.global-scripts.index', compact('script'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'header_scripts' => 'nullable|string',
            'body_scripts' => 'nullable|string',
            'footer_scripts' => 'nullable|string',
        ]);

        $script = GlobalScript::first() ?? new GlobalScript();
        $script->header_scripts = $request->header_scripts;
        $script->body_scripts = $request->body_scripts;
        $script->footer_scripts = $request->footer_scripts;
        $script->save();

        return redirect()->route('admin.global-scripts.index')
            ->with('success', 'Global scripts updated successfully!');
    }
}
