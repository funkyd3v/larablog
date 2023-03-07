<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move('images', $newImageName);
        
        Post::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        if(file_exists($request->image)){
            $newImageName = uniqid() . '-' . $slug . '.' .$request->image->extension();
    
        }else{
            $newImageName = $request->image_path;
        }
        $request->image->move('images', $newImageName);

        Post::where('id', $request->id)
            ->update([
                'title' => $request->input('title'),
                'slug' => $slug,
                'description' => $request->input('description'),
                'image_path' => $newImageName,
            ]);
        
        return redirect('/blog')->with('message', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        
        // if(file_exists($post->image_path))
        // {
        //     unlink($post->image);
        // }
        $post->delete();
        return redirect('/blog')->with('message', 'Post has been deleted!');
    }
}
