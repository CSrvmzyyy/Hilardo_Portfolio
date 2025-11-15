<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Show all projects (public)
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('projects.index', compact('projects'));
    }

    // Show single project (public)
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Show create form (admin)
    public function create()
    {
        return view('admin.projects.create');
    }

    // Store new project (admin)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tech_stack' => 'nullable|array',
            'live_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'featured' => 'boolean',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    // Show edit form (admin)
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // Update project (admin)
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tech_stack' => 'nullable|array',
            'live_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'featured' => 'boolean',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    // Delete project (admin)
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}