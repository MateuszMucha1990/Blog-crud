<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    public function index()
    {


        return view('blog.index')
            ->with('posts', Post::orderby('updated_at', 'DESC')->get());
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {
       $request->validate([
            'title'=>'required',
            'description' =>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
       ]);

       $newImageName = uniqid() . '-' . $request->title . $request->image->extension();

       //przeniesie foto do tego pliku
       $request->image->move(public_path('images'),$newImageName);

        //nadanie sluga do zdjecia -uzyto composer sluggable
       $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

       Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug' =>$slug,
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
       ]);

       return redirect('/blog')
            ->with('message', 'Twój post został dodany');
    }





    public function show(string $slug)
    {
        return view('blog.show')
            ->with('post',Post::where('slug',$slug)->first());
    }


    public function edit(string $slug)
    {
        return view('blog.edit')
            ->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title'=>'required',
            'description' =>'required',
       ]);

        Post::where('slug',$slug)
            ->update([
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'slug' =>$slug,
                'user_id'=>auth()->user()->id
            ]);
        return redirect('/blog')
            ->with('message', 'Twój post został uaktualniony!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $post = Post::where('slug',$slug);
        $post->delete();

       return redirect('/blog')
            ->with('message', 'Usunięto wpis');
    }
}
