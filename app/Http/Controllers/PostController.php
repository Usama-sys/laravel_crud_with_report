<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('post.add_post');
    }

    
    public function store(Request $request)
    {
        // return dd($request);

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','post has been created successfully');
         
    }

   
    public function show(Post $post)
    {
        $posts = Post::orderBy('id','asc')->get();
        return view('post.show',compact('posts'));
    }

    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit_post',compact('post'));
    }
    public function update(Request $request,$id)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_updated','post has been updated successfully');

    }
    
  

    
    public function destroy($id)
    {
        $post = Post::where('id',$id)->delete();
        return back()->with('post_deleted','post has been deleted successfully');


    }
}
