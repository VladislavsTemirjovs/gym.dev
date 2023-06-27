<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function savePost(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'text' => 'required|string',
            'image' => 'image|max:20480', // Maximum file size of 20MB
            'date' => 'required|date',
        ]);
    
        // Handle image upload, if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        // Create a new post record
        $post = Post::create($validatedData);
    
        // Associate the post with the authenticated user (assuming you have authentication set up)
        $user = auth()->user();
        $post->person()->associate($user);
        $post->save();
    
        // Redirect or perform any other actions as needed
    
        // Return a response indicating success
        return response()->json(['message' => 'Post created successfully'], 201);
    }
}
