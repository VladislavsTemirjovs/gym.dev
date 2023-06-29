<?php


namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

        $comment = new comment();
        $comment->post_id = $request->post_id;
        $comment->comment = $validatedData['comment'];
        $comment->user_id = auth()->user()->id; // Assuming you have authentication in place

        $comment->save();

        return redirect()->route('posts.all');
    }
}
