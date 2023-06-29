<style>
    body {
  background-color: #000;
  color: #fff;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.select-filter {
  margin-bottom: 20px;
}

.select-filter label {
  display: block;
  font-weight: bold;
}

.select-filter select {
  width: 100%;
  padding: 8px;
  font-size: 16px;
}

.ranking {
  margin-bottom: 20px;
}

.ranking-header {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.ranking-header h2 {
  flex-grow: 1;
  margin: 0;
}

.ranking-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.ranking-item {
  display: flex;
  align-items: center;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.ranking-item .rank {
  width: 40px;
  text-align: center;
  font-weight: bold;
}

.ranking-item .profile-image {
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 10px;
}

.ranking-item .profile-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.ranking-item .profile-details {
  flex-grow: 1;
}

.ranking-item .profile-details p {
  margin: 0;
}

/* Additional styles for the yellow/black theme */

.container {
  border: 2px solid #ffdb00;
}

.select-filter label {
  color: #ffdb00;
}

.select-filter select {
  background-color: #ffdb00;
  color: #000;
}

.ranking-header {
  background-color: #ffdb00;
  padding: 10px;
  border-radius: 5px;
}

.ranking-item {
  background-color: #ffdb00;
  padding: 10px;
}

.ranking-item .rank {
  background-color: #000;
  color: #ffdb00;
}

.ranking-item .profile-details p {
  color: #000;
}
 .profile-image {
  width: 40px;
  height: 40px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 10px;
}

.profile-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
}
.filter {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .filter label {
        font-weight: bold;
        margin-right: 0.5rem;
    }

    .filter select {
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        padding: 0.5rem;
    }

    .button {
        background-color: yellow;
        color: black;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .button:hover {
        background-color: #2779bd;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ranking
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow overflow-hidden shadow-xl sm:rounded-lg p-6">

                <form method="post" action="{{ route('user.filter') }}">
                    @csrf

                    <div class="filter">
                        <label for="filter" class="font-bold">Filter by:</label>
                        <select name="filter" id="filter" class="border border-gray-300 rounded p-2">
                            <option value="bench" @if($selectedFilter === 'bench') selected @endif>Bench Press</option>
                            <option value="squat" @if($selectedFilter === 'squat') selected @endif>Squat</option>
                            <option value="deadlift" @if($selectedFilter === 'deadlift') selected @endif>Deadlift</option>
                        </select>
                    </div>

                    <button type="submit" class="button">Filter</button>
                </form>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Male Ranking</h2>
                    @if ($maleRanking)
                        @foreach ($maleRanking as $index => $user)
                            <div class="flex items-center mb-4">
                                <div class="profile-image">
                                    <img src="{{ asset('profile/' . $user->image) }}" alt="User Image">
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-bold">{{ $index + 1 }}. {{ $user->name }} {{ $user->surname }}</h3>
                                    <p>{{ $selectedFilter }}: {{ $user->$selectedFilter }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No male users found.</p>
                    @endif
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Female Ranking</h2>
                    @if ($femaleRanking)
                        @foreach ($femaleRanking as $index => $user)
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 mr-4">
                                    <img src="{{ asset('profile/' . $user->image) }}" alt="User Image" class="rounded-full object-cover w-full h-full">
                                </div>
                                <div>
                                    <h3 class="font-bold">{{ $index + 1 }}. {{ $user->name }} {{ $user->surname }}</h3>
                                    <p>{{ $selectedFilter }}: {{ $user->$selectedFilter }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No female users found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
