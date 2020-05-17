<?php

namespace App\Http\Controllers;


use App\BlogPost;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BlogPostRepository; //load the repository which manages the database quieries

class BlogPostController extends Controller
{
    private $blog_posts;

     /**
     * Create a new controller instance.
     *
     * @param  BlogPostRepository  $tasks
     * @return void
     */
    public function __construct(BlogPostRepository $blog_posts)
    {
        //$this->middleware('auth');

        $this->blog_posts = $blog_posts;
        
    }


    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {   
        //$blog_posts = BlogPost::all();
        //return $blog_posts;
        $blog_posts =$this->blog_posts->UserPosts();
        //return $blog_posts;

        return view('blog_post.index', ['blog_posts' => $blog_posts,]);
    }

        /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

       /* $request->user()->tasks()->create([
            'name' => $request->name,
        ]); */

        return redirect('/index');
    }
}
