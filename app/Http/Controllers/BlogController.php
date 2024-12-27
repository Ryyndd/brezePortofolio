<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    //
    public function index(Request $request): View
        {
            $search = $request->input('search');
            
            $blog = Blog::with('user') // Memuat relasi user
                    ->when($search, function ($query) use ($search) {
                        return $query->where('title', 'like', "%{$search}%") // Pastikan nama kolom sesuai
                                    ->orWhere('content', 'like', "%{$search}%")
                                    ->orWhereHas('user', function ($q) use ($search) {
                                         $q->where('name', 'like', "%{$search}%"); // Mencari berdasarkan nama pengguna
                                });
                    })
                    ->get()
                    ->sortByDesc('created_at');
            return view('layouts.admin-blog.table' , compact('blog'));
        }

    public function pageBlog() :View
        {
            $blog = Blog::with('user')->get();
            return view('blog', compact('blog'));
        }
    
    
    public function create() : View
        {
            return view('layouts.admin-blog.create');
        }

    public function store(Request $request): RedirectResponse
        {
            // Validasi form
            $request->validate([
                'blog_image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
                'blog_title'         => 'required|string|max:255',
                'blog_slug'          => 'nullable|string',
                'blog_status'        => 'required|in:private,public',
            ]);



            // dd($validatedData);
            $slug = Str::slug($request->blog_title . '-' . time());

            // Handle image upload
            if ($request->hasFile('blog_image')) {
                $image = $request->file('blog_image');
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/blog', $imageName);
            } else {
                $imageName = null;
            }


            // Store the new blog
            Blog::create([
                'blog_image'         => $imageName,
                'blog_title'         => $request->blog_title,
                'blog_slug'          => $slug,
                'blog_content'   => $request->blog_content,
                'blog_status'        => $request->blog_status,
                'user_id'            => Auth::id(),
            ]);


            // Redirect to index
            return redirect()->route('blog.index')->with('success', 'Data Berhasil Disimpan!');
        }

        public function edit(string $blog_slug): View
        {
            $blog = Blog::where('blog_slug', $blog_slug)->firstOrFail();
            //render view with product
            return view('layouts.admin-blog.edit', compact('blog'));
        }

        public function update(Request $request, $blog_slug): RedirectResponse
        {

        
            // Validasi form
            $request->validate([
                'blog_title'         => 'required|string|max:255',
                'blog_slug'          => 'nullable|string',
                'blog_content'       => 'required|string',
                'blog_status'        => 'required|in:private,public',
            ]);
        
            $blog = Blog::where('blog_slug', $blog_slug)->firstOrFail();
        
            // Generate slug dari blog_title dan blog_category
            $slug = Str::slug($request->blog_title . '-' . time());
        
            // Handle image upload
            if ($request->hasFile('blog_image')) {
                $image = $request->file('blog_image');
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/blog', $imageName);
            } else {
                $imageName = $blog->blog_image;
            }
        
            // Update data di model
            $blog->update([
                'blog_image'         => $imageName,
                'blog_title'         => $request->blog_title,
                'blog_slug'          => $slug,
                'blog_content'   => $request->blog_content,
                'blog_status'        => $request->blog_status,
                'user_id'            => Auth::id(),
            ]);
        
        
            // Redirect to index
            return redirect()->route('blog.index')->with('success', 'Data Berhasil Disimpan!');
        }
        
        public function destroy($blog_slug): RedirectResponse
        {
            // Get project by slug
            $blog = Blog::where('blog_slug', $blog_slug)->firstOrFail();
        
            // Delete image if exists
            if ($blog->blog_image) {
                Storage::delete('public/blog/' . $blog->blog_image);
            }
        
            // Delete project record from database
            $blog->delete();

            Alert::success('Sucessfully!', 'Blog deleted successfully');
            return redirect()->route('blog.index');
        
            // Redirect to index with success message
            // return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }
        
}
