<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.plans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required|in:monthly,yearly',
            'features' => 'required', // We'll expect one per line
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        // Convert textarea newlines to array
        $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));
        $data['features'] = json_encode(array_values($featuresArray));
        $data['is_popular'] = $request->has('is_popular');

        Plan::create($data);

        return redirect()->route('admin.plans.index')->with('success', 'Plan created successfully.');
    }

    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required|in:monthly,yearly',
            'features' => 'required',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));
        $data['features'] = json_encode(array_values($featuresArray));
        $data['is_popular'] = $request->has('is_popular');

        $plan->update($data);

        return redirect()->route('admin.plans.index')->with('success', 'Plan updated successfully.');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('admin.plans.index')->with('success', 'Plan deleted successfully.');
    }
}
