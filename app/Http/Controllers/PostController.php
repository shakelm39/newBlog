<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('backend.post.view_post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('backend.post.add_post',compact('categories'));
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
                'title'=>['required','string','max:255'],
                'subTitle'=>['required','string','max:255'],
                'content'=>['required'],
                'category_id'=>['required']
            ]);

            Post::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'subTitle'=>$request->subTitle,
            'content'=>$request->content,
            'slug'=>Str::Slug($request->title),
            'user_id'=>Auth::user()->id
        ]);
        

         return redirect()->back()->with('success','Post has been Created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post       = Post::with('category')->find($id);
        $categories = Category::all();
        
        return view('backend.post.edit_post',['post'=>$post,'categories'=>$categories]);
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
        $post       = Post::with('category')->find($id);
            $request->validate([
                'title'=>['required','string','max:255'],
                'subTitle'=>['required','string','max:255'],
                'content'=>['required'],
                'category_id'=>['required']
            ]);

            $post->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'subTitle'=>$request->subTitle,
            'content'=>$request->content,
            'slug'=>Str::Slug($request->title),
            'published'=>$request->published,
            'user_id'=>Auth::user()->id
        ]);
        

        return redirect()->route('post.view')->with('success','Post has been Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post       = Post::with('category')->find($id);
        $post->delete();
        return redirect()->back()->with('success','Post has been Deleted!!');
    }
}
