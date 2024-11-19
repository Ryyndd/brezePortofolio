<?php

namespace App\Http\Controllers;

use App\Models\Techstack;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TechstackController extends Controller
{
   
    public function index(Request $request): View
        {
            $search = $request->input('search');

            // Jika ada kata kunci pencarian, filter berdasarkan nama atau deskripsi
            $techstack = Techstack::query()
                ->when($search, function ($query, $search) {
                    return $query->where('tech_name', 'like', "%{$search}%")
                                ->orWhere('tech_description', 'like', "%{$search}%");
                })
                ->latest()
                ->simplePaginate(10);

            return view('layouts.admin-techstack.table', compact('techstack'));
        }

        public function pageTechstack()

        {

            $techstack = Techstack::all();

            return view('about', compact('techstack'));

        }

        public function pageHome()

        {

            $techstack = Techstack::all();

            return view('home', compact('techstack'));

        }

        public function infinity() 
        {
            $infinity = Techstack::all();
            return view('components.infinity', compact('infinity'));
        }
        
        


    public function create() : View
        {

            $colors = Techstack::getColors();

            // Return view dengan data warna
            return view('layouts.admin-techstack.create', ['colors' => $colors]);
        }


    public function store(Request $request): RedirectResponse
        {
            // Validate form
            $request->validate([
                'tech_image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
                'tech_name'          => 'required',
                'tech_color'          => 'required',
                'tech_fullname'      => 'required|min:5',
                'tech_description'   => 'required|min:10',
            ]);
            

            // Generate slug from tech_name
            $slug = Str::slug($request->tech_fullname);

            // Handle image upload
            if ($request->hasFile('tech_image')) {
                $image = $request->file('tech_image');
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/techstack', $imageName);
            } else {
                $imageName = null;
            }

            // Store the new techstack
            Techstack::create([
                'tech_image'         => $imageName,
                'tech_name'          => $request->tech_name,
                'tech_color'          => $request->tech_color,
                'tech_fullname'      => $request->tech_fullname,
                'tech_slug'          => $slug,
                'tech_description'   => $request->tech_description,
            ]);

            // Redirect to index
            return redirect()->route('techstack.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }


        public function edit(string $tech_slug): View
        {

            $colors = Techstack::getColors();
            // Get techstack by slug
            $techstack = Techstack::where('tech_slug', $tech_slug)->firstOrFail();

            //render view with product
            return view('layouts.admin-techstack.edit', compact('techstack') , ['colors' => $colors]);
        }

    public function update(Request $request, $tech_slug): RedirectResponse
        {
            // Validate form
            $request->validate([
                'tech_image'         => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'tech_name'          => 'required',
                'tech_color'          => 'required',
                'tech_fullname'      => 'required|min:5',
                'tech_description'   => 'required|min:10',
            ]);

            // Get techstack by slug
            $techstack = Techstack::where('tech_slug', $tech_slug)->firstOrFail();

            // Generate new slug
            $newSlug = Str::slug($request->tech_fullname);

            // dd($request->tech_fullname);

            // Check if image is uploaded
            if ($request->hasFile('tech_image')) {
                // Delete old image if exists
                if ($techstack->tech_image) {
                    Storage::delete('public/techstack/' . $techstack->tech_image);
                }

                // Upload new image
                $image = $request->file('tech_image');
                $imageName = $newSlug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/techstack', $imageName);
            } else {
                $imageName = $techstack->tech_image; // Keep the old image name
            }

            // Update techstack
            $techstack->update([
                'tech_image'         => $imageName,
                'tech_name'          => $request->tech_name,
                'tech_color'          => $request->tech_color,
                'tech_fullname'      => $request->tech_fullname,
                'tech_slug'          => $newSlug,
                'tech_description'   => $request->tech_description,
            ]);

            // Redirect to index
            return redirect()->route('techstack.index')->with(['success' => 'Data Berhasil Diubah!']);
        }


    public function destroy($tech_slug): RedirectResponse
        {
            // Get techstack by slug
            $techstack = Techstack::where('tech_slug', $tech_slug)->firstOrFail();

            // Delete image if exists
            if ($techstack->tech_image) {
                Storage::delete('public/techstack/' . $techstack->tech_image);
            }

            // Delete techstack record from database
            $techstack->delete();

            // Redirect to index with success message
            return redirect()->route('techstack.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }




}
