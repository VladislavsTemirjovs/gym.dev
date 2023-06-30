<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\comment;
use App\Http\Controllers\View;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function show()
{
    $posts = Post::with('user', 'comment')->orderBy('created_at', 'desc')->get();
    return view('dashboard', compact('posts'));
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
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $imagePath = public_path('images/' . $imageName);
            
            // Resize the image to the desired dimensions
            $resizedImage = Image::make($image)
                ->resize(300, 200) // Set the width and height you want
                ->save($imagePath);
        
            $validatedData['image'] = 'images/' . $imageName;
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
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
    
        // Delete the post's image if it exists
        if (!empty($post->image)) {
            $imagePath = public_path($post->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
    
        // Delete the post
        $post->delete();
    
        return redirect()->route('posts.all');
    }

}
