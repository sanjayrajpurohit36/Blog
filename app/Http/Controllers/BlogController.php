<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\blog;
use App\category;
use App\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Send all the blogs to the index page created by the logged in user
     *
     * @author
     * @return view
     */
    public function index()
    {
        $id = Auth::user()->id; // getting the id of the logged in user
        $blogs = User::find($id)->blogs;
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @author Function to return all the existing categories
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=[];
        $catblogs  = category::all(); // To get all the existing categories
        foreach ($catblogs as $catblog) {
           $cat[$catblog->id]=$catblog->category;
        }
        dd($cat);
        return view('category.create',compact('cat'));
    }

    /**
     * Storing the blog to database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'blog_id'=>'Required',
            'title'=>'Required',
        ]);
        $cat = blog::create([
            'blog_id' => request('blog_id'),
            'title' => request('title'),
            'user_id' => auth()->id()
            ]); 
        return \Redirect::route('blog.index');
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
}
