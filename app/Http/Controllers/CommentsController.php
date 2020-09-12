<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
class CommentsController extends Controller
{
    public function insert(Request $request,$id)
    {
        $commets = new Comments();

        $commets->name = $request->name;
        $commets->mail = $request->email;
        $commets->body = $request->comment;
        $commets->post_id = $id;

        $commets->save();

        return redirect()->back();
    }
}
