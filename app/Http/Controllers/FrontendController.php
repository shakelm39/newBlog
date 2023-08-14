<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostComment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('posts')->get();
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.layouts.index',compact('categories','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allPost = Category::with('posts')->find($id);
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();


        return view('frontend.layouts.category',compact('allPost','categories','posts'));
    }

    //signle post show

    public function singlePost($id){
       
        $singlePost = Post::with('category','user')->find($id);
        $categories = Category::with('posts')->get();
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $postComment = PostComment::where('post_id', $id)->get();



        return view('frontend.layouts.single',compact('singlePost','categories','posts','postComment'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function blogpost(){
        $categories = Category::with('posts')->latest()->where('title','Blogging')->get();
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get(); 
        return view('frontend.layouts.blog',compact('categories','posts'));
    }
}
