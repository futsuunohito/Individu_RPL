<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $posts){
        $this->validate(request(), [
            'message' => 'required'
        ]);
        Comment::create([
            'post_id' => $posts->id,
            'user_id' => auth()->id(),
            'message' => request('message')
        ]);
        return redirect()->back()->withInfo('Comment added');;
    }
}
