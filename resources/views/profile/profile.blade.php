<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
        {{ __('messages.UserProf') }}
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
            <span class="label">{{ __('messages.name') }}:</span>
            <span class="value">{{ $user->name }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.surname') }}:</span>
            <span class="value">{{ $user->surname }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.sex') }}:</span>
            <span class="value">{{ $user->sex }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.age') }}:</span>
            <span class="value">{{ $user->age }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.weight') }}:</span>
            <span class="value">{{ $user->weight }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.bench') }}:</span>
            <span class="value">{{ $user->bench }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.squat') }}:</span>
            <span class="value">{{ $user->squat }}</span>
        </div>
        <div class="info">
            <span class="label">{{ __('messages.dead') }}:</span>
            <span class="value">{{ $user->deadlift }}</span>
        </div>
    </div>
    <div class="profile-buttons">
        @if (auth()->user()->role === 'admin' || auth()->user()->id === $user->id)
            @if ($user->role === 'user' && auth()->user()->role === 'admin')
                <form action="{{ route('admin.make', ['id' => $user->id]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('messages.makeAdm') }}</button>
                </form>
            @elseif ($user->role === 'admin' && auth()->user()->role === 'admin')
                <form action="{{ route('admin.remove', ['id' => $user->id]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ __('messages.removeAdm') }}</button>
                </form>
            @endif
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('messages.edit') }}</a>
            <form action="{{ route('profile.destroy') }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('messages.delete') }}</button>
            </form>
        @endif
    </div>
</div>
</x-app-layout>


