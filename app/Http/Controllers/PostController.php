<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\View;

class PostController extends Controller
{
    public function show() {
        return view('dashboard');
    }
    public function create()
    {
        // Your code to prepare data or perform any necessary actions before displaying the view

        return view('post'); // Replace 'posts.create' with the actual view path you want to return
    }
    public function savePost(Request $request)
    {
        $post = new post();
        // Get the current date in the desired format
        $today = date('Y-m-d');
    
        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required|string',
            'image' => 'image|max:20480', // Maximum file size of 20MB
        ]);
    
        // Add the current date to the validated data
        $validatedData['date'] = $today;
    
        // Handle image upload, if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');
            $validatedData['image'] = $imagePath;
            $post->image = $validatedData['image'];
        }
        $post->user_id = auth()->user()->id;
        $post->content = $validatedData['content'];
        $post->date = $validatedData['date'];
        
        $post->save();
    
        // Redirect or perform any other actions as needed
    
        // Return a response indicating success
        return redirect()->route('posts.all');
    }
}
