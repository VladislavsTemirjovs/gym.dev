<style>
    /* Form styles */
    .profile-edit {
        background-color: #000000;
        color: #FFFF00;
        padding: 20px;
        border: 1px solid #FFFF00;
    }

    .profile-edit .label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .profile-edit .input {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #FFFF00;
        background-color: #000000;
        color: #FFFF00;
        width: 100%;
    }

    .profile-edit .form-group {
        margin-bottom: 20px;
    }

    .profile-edit .form-actions {
        margin-top: 20px;
    }

    .profile-edit .btn {
        background-color: #000000;
        color: #FFFF00;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        margin-right: 10px;
    }

    .profile-edit .btn-primary {
        background-color: #FFFF00;
        color: #000000;
    }

    .profile-edit .btn-secondary {
        background-color: #FFFF00;
        color: #000000;
    }

    .profile-edit .btn-danger {
        background-color: #FF0000;
        color: #FFFFFF;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="title">
        {{ __('messages.editprof') }}
        </h2>
    </x-slot>

    <div class="profile-edit">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="label">{{ __('messages.name') }}:</label>
                <input type="text" name="name" id="name" class="input" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="surname" class="label">{{ __('messages.surname') }}:</label>
                <input type="text" name="surname" id="surname" class="input" value="{{ $user->surname }}" required>
            </div>

            <div class="form-group">
                <label for="sex" class="label">{{ __('messages.sex') }}:</label>
                <input type="text" name="sex" id="sex" class="input" value="{{ $user->sex }}" required>
            </div>

            <div class="form-group">
                <label for="age" class="label">{{ __('messages.age') }}:</label>
                <input type="number" name="age" id="age" class="input" value="{{ $user->age }}" required>
            </div>

            <div class="form-group">
                <label for="weight" class="label">{{ __('messages.weight') }}:</label>
                <input type="number" name="weight" id="weight" class="input" value="{{ $user->weight }}" required>
            </div>

            <div class="form-group">
                <label for="bench" class="label">{{ __('messages.bench') }}:</label>
                <input type="number" name="bench" id="bench" class="input" value="{{ $user->bench }}" required>
            </div>

            <div class="form-group">
                <label for="squat" class="label">{{ __('messages.squat') }}:</label>
                <input type="number" name="squat" id="squat" class="input" value="{{ $user->squat }}" required>
            </div>

            <div class="form-group">
                <label for="deadlift" class="label">{{ __('messages.dead') }}:</label>
                <input type="number" name="deadlift" id="deadlift" class="input" value="{{ $user->deadlift }}" required>
            </div>

            <div class="form-group">
                <label for="image" class="label">{{ __('messages.profimg') }}:</label>
                <input type="file" name="image" id="image" class="input">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                <a href="{{ route('profile.show') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
            </div>
        </form>

        <form action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">{{ __('messages.delprof') }}</button>
        </form>
    </div>
</x-app-layout>
