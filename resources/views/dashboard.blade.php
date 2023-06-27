<style>
    /* Forum Styles */

/* Background colors */
body {
    background-color: #000000;
}

.bg-white {
    background-color: #FFFF00 !important;
}

/* Text colors */
.text-gray-800 {
    color: #000000 !important;
}

.text-gray-700 {
    color: #333333 !important;
}

.text-gray-500 {
    color: #666666 !important;
}

/* Form styles */
.form-input {
    background-color: #FFFFFF !important;
    border-color: #000000 !important;
    color: #000000 !important;
}

/* Button styles */
.bg-indigo-600 {
    background-color: #FFFF00 !important;
}

/* Post styles */
.post {
    background-color: #FFFFFF;
    color: #000000;
    border: 1px solid #000000;
    padding: 10px;
    margin-bottom: 20px;
}

.post .user-info {
    display: flex;
    align-items: center;
}

.post .user-info .profile-image {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.post .user-info .name {
    font-weight: bold;
    color: #000000;
}

.post .user-info .timestamp {
    color: #666666;
    font-size: 12px;
}

.post .content {
    margin-top: 10px;
}

.post .image {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

/* Comment styles */
.comment {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.comment .profile-image {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment .name {
    font-weight: bold;
    color: #000000;
}

.comment .timestamp {
    color: #666666;
    font-size: 12px;
}

.comment .content {
    margin-left: 10px;
}
</style>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 bg-black p-4">
            {{ __('RMI GYM Forums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Forum Section -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Create Post Form -->
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="content" class="block font-medium text-sm text-gray-700">Post Content:</label>
                            <textarea id="content" name="content" rows="4" class="form-input mt-1 block w-full"
                                required></textarea>
                        </div>

                        <div>
                            <label for="image" class="block font-medium text-sm text-gray-700">Image:</label>
                            <input type="file" id="image" name="image" accept="image/*" class="mt-1">
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Create Post
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Display Posts -->
                <div class="p-6">
                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full" src="#"
                                    alt="#">
                            </div>
                            <div>
                                <div class="font-medium">{{ 'post->user->name' }} {{ 'post->user->surname' }}</div>
                                <div class="text-gray-500">{{ 'post->created_at->diffForHumans()' }}</div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p>{{ 'post->content' }}</p>
                        </div>
                        <div class="mt-2">
                           <!--  @if (' post->image')
                            <img src="#" alt="Post Image" class="max-w-full h-auto">
                            @endif -->
                        </div>
                        <div class="mt-4">
                            <h3 class="font-medium">Comments</h3>
                            <!-- Display Comments for the Post -->

                            <div class="flex items-center mt-2">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="h-8 w-8 rounded-full" src="#"
                                        alt="#">
                                </div>
                                <div>
                                    <div class="font-medium">{{ ' comment->user->name' }}</div>
                                    <div class="text-gray-500">{{ '" comment->created_at->diffForHumans()"' }}</div>
                                </div>
                                <div class="ml-2">
                                    {{ ' comment->content' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
