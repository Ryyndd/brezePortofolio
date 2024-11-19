<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Techstack;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request): View
        {
       
            $search = $request->input('search');

            // Jika ada kata kunci pencarian, filter berdasarkan nama atau deskripsi
            $project = Project::query()
                ->when($search, function ($query, $search) {
                    return $query->where('pro_title', 'like', "%{$search}%")
                                ->orWhere('pro_category', 'like', "%{$search}%");
                })
                ->latest()
                ->simplePaginate(10);

            // return view('layouts.admin-techstack.table', compact('techstack'));
            return view('layouts.admin-project.table' , compact('project'));
        }


        public function pageProject() : View
        {
            $project = Project::with('techstack')->get();
            return view('project' , compact('project'));
        }

        public function create() : View
        {
            $categories = Project::getCategories();
            $techstack = Techstack::all();
            return view('layouts.admin-project.create' , ['categories' => $categories] , ['techstack' => $techstack]);
        }

    public function store(Request $request): RedirectResponse
        {
            // Validasi form
            $validatedData = $request->validate([
                'pro_image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
                'pro_title'         => 'required|string|max:255',
                'pro_category'      => 'required',
                'pro_description'   => 'required|string|min:10',
                'pro_slug'          => 'nullable|string',
                'pro_source'        => 'nullable|url',
                'pro_preview'       => 'nullable|url',
                'tech_ids'          => 'required|array', 
            ]);

            // dd($validatedData);
                
            // Generate slug dari tech_name dan tech_color
            $slug = Str::slug($request->pro_title . '-' . $request->pro_category);

            // Handle image upload
            if ($request->hasFile('pro_image')) {
                $image = $request->file('pro_image');
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/project', $imageName);
            } else {
                $imageName = null;
            }


            // Store the new project
            Project::create([
                'pro_image'         => $imageName,
                'pro_title'         => $request->pro_title,
                'pro_category'      => $request->pro_category,
                'pro_slug'          => $slug,
                'pro_description'   => $request->pro_description,
                'pro_source'        => $request->pro_source,
                'pro_preview'       => $request->pro_preview,
            ])->techstack()->sync($validatedData['tech_ids']);

            // Redirect to index
            return redirect()->route('project.index')->with('success', 'Data Berhasil Disimpan!');
        }

        public function edit(string $pro_slug): View
        {

            $categories = Project::getCategories();

            $techstack = Techstack::all(); 

            $project = Project::with('techstack')->where('pro_slug', $pro_slug)->firstOrFail();
            //render view with product
            return view('layouts.admin-project.edit', compact('project') , ['categories' => $categories ,  'techstack' => $techstack ] );
        }
        public function update(Request $request, $pro_slug): RedirectResponse
        {

           
            // Validasi form
            $validatedData = $request->validate([
                'pro_image'         => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'pro_title'         => 'required|string|max:255',
                'pro_category'      => 'required',
                'pro_description'   => 'required|string|min:10',
                'pro_slug'          => 'nullable|string',
                'pro_source'        => 'nullable|url',
                'pro_preview'       => 'nullable|url',
                'tech_ids'          => 'array', 
            ]);
        
            $project = Project::where('pro_slug', $pro_slug)->firstOrFail();
        
            // Generate slug dari pro_title dan pro_category
            $slug = Str::slug($request->pro_title . '-' . $request->pro_category);
        
            // Handle image upload
            if ($request->hasFile('pro_image')) {
                $image = $request->file('pro_image');
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/project', $imageName);
            } else {
                $imageName = $project->pro_image;
            }
        
            // Update data di model
            $project->update([
                'pro_image'         => $imageName,
                'pro_title'         => $request->pro_title,
                'pro_category'      => $request->pro_category,
                'pro_slug'          => $slug,
                'pro_description'   => $request->pro_description,
                'pro_source'        => $request->pro_source,
                'pro_preview'       => $request->pro_preview,
            ]);
        
            // Sinkronisasi techstack
            if (isset($validatedData['tech_ids'])) {
                $project->techstack()->sync($validatedData['tech_ids']);
            }
        
            // Redirect to index
            return redirect()->route('project.index')->with('success', 'Data Berhasil Disimpan!');
        }
        
        public function destroy($pro_slug): RedirectResponse
        {
            // Get project by slug
            $project = Project::where('pro_slug', $pro_slug)->firstOrFail();
        
            // Delete image if exists
            if ($project->pro_image) {
                Storage::delete('public/project/' . $project->pro_image);
            }
        
            // Detach all related techstacks before deleting the project
            $project->techstack()->detach();
        
            // Delete project record from database
            $project->delete();
        
            // Redirect to index with success message
            return redirect()->route('project.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }
        

        
}
