<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        html, body {
            height: 100%;
            margin: 40;
            padding: 40;
        }
        
        body {
            background-color: black;
            color: yellow;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-panel {
            background-color: black;
            color: yellow;
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        .register-panel h2 {
            margin-bottom: 20px;
        }

        .register-panel .form-group {
            margin-bottom: 10px;
        }

        .register-panel label {
            display: block;
            margin-bottom: 5px;
        }

        .register-panel input[type="text"],
        .register-panel input[type="number"],
        .register-panel input[type="password"],
        .register-panel select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid yellow;
            background-color: black;
            color: yellow;
        }

        .register-panel button[type="submit"],
        .register-panel button[type="button"] {
            background-color: yellow;
            color: black;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .register-panel .return-button {
            background-color: yellow;
            color: black;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="register-panel">
        <h2>Register</h2>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('profile.store') }}">
            @csrf

            <div class="form-group">
                <label for="login">Username</label>
                <input id="login" type="text" name="login" value="{{ old('login') }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input id="surname" type="text" name="surname" value="{{ old('surname') }}" required>
            </div>

            <div class="form-group">
                <label for="sex">Sex</label>
                <select id="sex" name="sex" required>
                    <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input id="age" type="number" name="age" value="{{ old('age') }}" required>
            </div>

            <div class="form-group">
                <label for="weight">Weight</label>
                <input id="weight" type="number" name="weight" step="1" value="{{ old('weight') }}" required>
            </div>

            <div class="form-group">
                <label for="bench">Bench Press</label>
                <input id="bench" type="number" name="bench" step="0.25" value="{{ old('bench') }}" required>
            </div>

            <div class="form-group">
                <label for="squat">Squat</label>
                <input id="squat" type="number" name="squat" step="0.25" value="{{ old('squat') }}" required>
            </div>

            <div class="form-group">
                <label for="deadlift">Deadlift</label>
                <input id="deadlift" type="number" name="deadlift" step="0.25" value="{{ old('deadlift') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
                <button type="button" class="return-button" onclick="window.location.href='{{ route('profile.login') }}'">Return</button>
            </div>
        </form>
    </div>
</body>
</html>


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-yellow-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-yellow-500" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" class="text-yellow-500" />

                <x-input id="name" class="block mt-1 w-full bg-black text-yellow-500" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" class="text-yellow-500" />

                <x-input id="email" class="block mt-1 w-full bg-black text-yellow-500" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="text-yellow-500" />

                <x-input id="password" class="block mt-1 w-full bg-black text-yellow-500"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" class="text-yellow-500" />

                <x-input id="password_confirmation" class="block mt-1 w-full bg-black text-yellow-500"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-yellow-600 hover:text-yellow-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 bg-yellow-500 text-black">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>