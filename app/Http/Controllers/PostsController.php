<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comments;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->paginate(10);
        return view('blog')->with('posts',$posts);
    }
    public function single($id)
    {
        $post = Posts::findOrFail($id);
        $comments = Comments::all()->where('post_id',$id);
        $count = DB::table('comments')->where('post_id',$id)->count('body');
        
        return view('blogdetails')
        ->with('post',$post)
        ->with('comments',$comments)
        ->with('count',$count);
        
    }
}
