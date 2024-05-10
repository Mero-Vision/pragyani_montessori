<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $search = request()->query('search_keyword');

        $blogs = Blog::with('media')->where('status', 'active')
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        })->latest()->paginate(5);


        $recentBlogs = Blog::with('media')->where('status', 'active')->latest()->limit(5)->get();

       

        return view('blogs.blogs', compact('blogs', 'recentBlogs'));
    }

    public function show($slug)
    {
        $blog = Blog::with('media')->where('slug', $slug)->first();
        
        $recentBlogs = Blog::with('media')->where('status', 'active')->latest()->paginate(5);

       

        return view('blogs.view_blog', compact('blog', 'recentBlogs'));
    }
}