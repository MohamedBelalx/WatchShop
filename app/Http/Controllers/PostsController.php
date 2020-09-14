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
    /* Admin Section */ 
    public function manage()
    {
        $posts = DB::table('posts')->paginate(10);
        return view('admin.posts.manage')->with('posts',$posts);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function insert(Request $request)
    {
        $post = new Posts();

        $post->title = $request->title;

        $post->body = $request->body;

        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/posts',$img_new_name);

        $post->img = 'uploads/posts/'.$img_new_name;

        $post->save();

        return redirect()->back();
    }


    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.posts.edit')->with('post',$post);
    }

    public function update(Request $request,$id)
    {
        $post = Posts::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;

        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/posts',$img_new_name);

        $post->img = 'uploads/posts/'.$img_new_name;

        $post->save();

        return redirect()->route('manage');

    }

    public function delete($id)
    {
        $post = Posts::findOrFail($id);

        $post->delete();

        return redirect()->back();
    }


}
