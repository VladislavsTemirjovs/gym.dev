<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        html, body {
            height: 125%;
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
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <!-- Add your logo here -->
            </x-slot>

            <div class="register-panel">
                <x-auth-validation-errors :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <x-label for="login" :value="__('messages.nickname')" />

                        <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
                    </div>

                    <div class="form-group">
                        <x-label for="name" :value="__('messages.name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="surname" :value="__('messages.surname')" />

                        <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="sex" :value="__('messages.sex')" />

                        <select id="sex" name="sex" required>
                            <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>{{ __('messages.male') }}</option>
                            <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>{{ __('messages.female') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <x-label for="age" :value="__('messages.age')" />

                        <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="weight" :value="__('messages.weight')" />

                        <x-input id="weight" class="block mt-1 w-full" type="number" name="weight" step="1" :value="old('weight')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="bench" :value="__('messages.bench')" />

                        <x-input id="bench" class="block mt-1 w-full" type="number" name="bench" step="0.25" :value="old('bench')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="squat" :value="__('messages.squat')" />

                        <x-input id="squat" class="block mt-1 w-full" type="number" name="squat" step="0.25" :value="old('squat')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="deadlift" :value="__('messages.dead')" />

                        <x-input id="deadlift" class="block mt-1 w-full" type="number" name="deadlift" step="0.25" :value="old('deadlift')" required />
                    </div>

                    <div class="form-group">
                        <x-label for="password" :value="__('messages.password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="form-group">
                        <x-label for="password_confirmation" :value="__('messages.confirmpass')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                    </div>

                    <div class="form-group">
                        <x-button class="ml-4">
                            {{ __('messages.register') }}
                        </x-button>
                    </div>
                    <button type="button" onclick="window.location.href='{{ route('login') }}'" class="ml-4">{{ __('messages.return') }}</button>
                </form>
                
            </div>
        </x-auth-card>
    </x-guest-layout>
</body>
</html>
