
<style>
body {
    background-color: black;
}

.user-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    background-color: black;
    padding: 20px;
}

.user {
    margin: 20px;
    text-align: center;
}

.profile-image {
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 50%;
    margin-bottom: 10px;
    border: 4px solid yellow;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-details {
    text-align: center;
}

.info {
    margin-bottom: 5px;
}

.label {
    font-weight: bold;
    color: yellow;
}

.value {
    margin-left: 5px;
    color: yellow;
}
.title {
    color: yellow;
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
        {{ __('messages.allusers') }}
        </h2>
    </x-slot>

    <div class="user-list">
        @foreach ($users as $user)
        <div class="user">
            <a href="{{ route('profile.showID', ['user' => $user->id]) }}">
                <div class="profile-image">
                    <img src="{{ asset('profile/' . $user->image) }}" alt="User Image" class="image">
                </div>
            </a>
            <div class="profile-details">
                <div class="info">
                    <span class="label">{{ __('messages.name') }}:</span>
                    <span class="value">{{ $user->name }}</span>
                </div>
                <div class="info">
                    <span class="label">{{ __('messages.surname') }}:</span>
                    <span class="value">{{ $user->surname }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>