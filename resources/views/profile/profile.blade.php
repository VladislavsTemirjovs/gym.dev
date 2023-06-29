<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <style>
        /* Profile Styles */

        /* Background colors */
        body {
            background-color: #000000;
            color: #FFFF00;
        }

        .profile {
            background-color: #000000;
            padding: 20px;
        }

        /* Text colors */
        .title {
            color: #FFFF00;
        }

        .label {
            color: #FFFF00;
            font-weight: bold;
        }

        .value {
            color: #FFFF00;
        }

        /* Profile image */
        .profile-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-image .image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        /* Profile details */
        .profile-details .info {
            margin-bottom: 10px;
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

    <div class="profile">
        <div class="profile-image">
            <img src="{{ asset('profile/' . $user->image) }}" alt="User Image" class="image">
        </div>
        <div class="profile-details">
            <div class="info">
                <span class="label">Name:</span>
                <span class="value">{{ $user->name }}</span>
            </div>
            <div class="info">
                <span class="label">Surname:</span>
                <span class="value">{{ $user->surname }}</span>
            </div>
            <div class="info">
                <span class="label">Sex:</span>
                <span class="value">{{ $user->sex }}</span>
            </div>
            <div class="info">
                <span class="label">Age:</span>
                <span class="value">{{ $user->age }}</span>
            </div>
            <div class="info">
                <span class="label">Weight:</span>
                <span class="value">{{ $user->weight }}</span>
            </div>
            <div class="info">
                <span class="label">Bench Press:</span>
                <span class="value">{{ $user->bench }}</span>
            </div>
            <div class="info">
                <span class="label">Squat:</span>
                <span class="value">{{ $user->squat }}</span>
            </div>
            <div class="info">
                <span class="label">Deadlift:</span>
                <span class="value">{{ $user->deadlift }}</span>
            </div>
        </div>
        <div class="profile-buttons">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('profile.destroy') }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>


