<?php

namespace App\Http\Controllers;

use App\Models\Backend\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Blog::all();
        return view('Backend.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = new Blog();
        $store->slug = random_int(10,20);

        $path = public_path('uploads/blogs');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('cover');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        $store->cover = $name;
        $store->headline = $request->headline;
        $store->content = $request->contentIs;
        $store->category =$request->category ;
        $store->added_by = Auth::id();
        $store->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
