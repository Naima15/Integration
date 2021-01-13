<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {    
        return view('user.addblog');

    }

    


    public function store(Request $request)
    {

        $blogcategory = $request->blogcategory;
        $blogname = $request->blogname;
        $blogdetails = $request->blogdetails;
        $bloglink = $request->bloglink;

        $image = $request->file('image');
        $image_Name = time().'.'.$image->extension();
        $image->move(public_path('Image/'),$image_Name);
        $image = 'Image/'.$image_Name;

        $blog = new blog();
        $blog->blogcategory = $blogcategory;
        $blog->blogname = $blogname;
        $blog->blogdetails = $blogdetails;
        $blog->bloglink = $bloglink;
        $blog->image = $image;
        $blog->save();

        return back()->with("blog_added","Record has been inserted!");
    }
    public function allblog()
    {
        $blogs = blog::all();
        return view('user.allblog', compact('blogs'));
    }


    public function singleblog($id)
    {
        $blog = blog::find($id);
        return view('user.blogdetails',compact('blog'));  
    }

   
   // public function userblog()
    //{
      //  $blogs = blog::where('user_id','=',Auth::id()->get()->first();
        //return view('user.userdashboard', compact('blogs'));
    //}

   

    
}
