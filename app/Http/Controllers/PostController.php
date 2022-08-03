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


        $request->validate([
            'title'=>'required',
            'body'=>'required'

    ]);

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','post has been created successfully');

        // $request->session()->flash('post_created','post has been created successfully' );
        // return redirect('add_post');
         
        // $request->session()->flash('post_created','post has been created successfully good' );
        // return view('post.add_post');
    }

   
    public function show(Request $request, Post $post)
    {

        // $posts = Post::withoutTrashed()->orderBy('id','asc')->get();  
        $posts = Post::all(); //allways ordered by id asc
        return view('post.show',compact('posts')); 
        // return view('post.show')->with('posts',$posts);
    }

    // public function trash(Request $request, Post $post)
    // {

    //     $posts = Post::onlyTrashed()->orderBy('id','asc')->get();  
    //     //$posts = Post::all(); allways ordered by id asc
    //     return view('post.trash',compact('posts')); 
    //     // return view('post.show')->with('posts',$posts);
    // }

    // public function restore($id)
    // {

    //     Post::onlyTrashed()->find($id)->restore();  
    //     return back()->with('post_restore','post has been restored successfully');
    //     // return redirect('trash');
       
    // }

    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit_post',compact('post'));
        // return view('post.show')->with('posts',$posts);
    }
    public function update(Request $request)
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
