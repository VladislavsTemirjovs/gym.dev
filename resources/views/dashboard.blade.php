<style>
/* Forum Styles */

/* Background colors */
body {
    background-color: #000000;
    color: #FFFF00;
}

.main {
    background-color: #000000;
}

/* Text colors */
.title {
    color: #FFFF00;
}

.info,
.time,
.text p,
.sign,
.Comments p,
.section .commentinfo,
.section .comenttime,
.section .commenttext {
    color: #FFFF00;
}

/* Post styles */
.post {
    background-color: #000000;
    border: 1px solid #FFFF00;
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
}

.post .imagediv {
    margin-right: 10px;
}

.post .image {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.post .text {
    margin-top: 10px;
}

.post .postimage {
    margin-top: 10px;
}

.post .postimage .pimage {
    max-height: 300px;
    object-fit: contain;
}

/* Comment styles */
.section {
    margin-top: 10px;
    display: flex;
    flex-direction: column; /* Updated to align comment text below author */
    border: 1px solid #FFFF00; /* Added yellow border */
    padding: 10px; /* Added padding */
}

.section .commentinfo {
    font-weight: bold;
}

.section .comenttime {
    font-size: 12px;
    margin-left: 10px;
}

.section .commenttext {
    margin-left: 10px;
}

/* Button styles */
.btn {
    background-color: #000000;
    color: #FFFF00;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    margin-right: 10px;
}

.btn-primary {
    background-color: #FFFF00;
    color: #000000;
}

.btn-danger {
    background-color: #FF0000;
    color: #FFFFFF;
}

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
            {{ __('RMI GYM Forums') }}
        </h2>
    </x-slot>

    <div class="main">
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <div class="imagediv">
                        <img src="{{ asset('profile/' . $post->user->image) }}" alt="Post Image" class="image">
                    </div>
                    <div class="post-content">
                        <div class="post-header">
                            <div class="info">{{ $post->user->name }} {{ $post->user->surname }}</div>
                            <div class="time">{{ $post->created_at->diffForHumans() }}</div>
                        </div>
                        <div class="text">
                            <p>{{ $post->content }}</p>
                        </div>
                        <div class="postimage">
                            @if ($post->image)
                                <img src="{{ asset('/' . $post->image) }}" alt="Post Image" class="pimage">
                            @endif
                        </div>
                    </div>
                    <div class="Comments">
                        <h3 class="sign">Comments</h3>
                        @if (is_null($post->comment))
                            <p>No comments yet.</p>
                        @elseif ($post->comment->isEmpty())
                            <p>No comments yet.</p>
                        @else
                            @foreach ($post->comment as $comment)
                                <div class="section">
                                    <div class="comment-author">
                                        <div class="comment-info">{{ $comment->user->name }} {{ $comment->user->surname }}</div>
                                        <div class="comment-time">{{ $comment->created_at->diffForHumans() }}</div>
                                    </div>
                                    <div class="comment-text">
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if(auth()->user()->role !== 'guest')
                    <div class="comment-form">
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <textarea name="comment" class="form-control" placeholder="Write a comment" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                    <div class="delete-button">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>


