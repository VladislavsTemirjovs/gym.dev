<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: black;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
        color: yellow;
    }

    .container {
        max-width: 400px;
        width: 100%;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid yellow;
        background-color: black;
        color: yellow;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        outline: none;
        border-color: yellow;
    }

    .btn-primary,
    .btn-secondary,
    .btn-guest {
        background-color: yellow;
        color: black;
        padding: 10px 20px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-primary:hover,
    .btn-secondary:hover,
    .btn-guest:hover {
        background-color: black;
        color: yellow;
    }

    .btn-secondary {
        margin-left: 10px;
    }

    .btn-guest {
        margin-top: 10px;
    }
    .guest-button {
    background-color: yellow;
    color: black;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
}
</style>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <h1 style="color: yellow;">RMI GYM</h1>
            </a>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <x-label for="login" :value="__('Lietotājvārds')" class="text-yellow-500" />
                <x-input id="login" class="block mt-1 w-full bg-black text-yellow-500 border-yellow-500 focus:outline-none focus:border-yellow-600" type="text" name="login" :value="old('login')" required autofocus />
            </div>

            <div class="form-group">
                <x-label for="password" :value="__('Parole')" class="text-yellow-500" />
                <x-input id="password" class="block mt-1 w-full bg-black text-yellow-500 border-yellow-500 focus:outline-none focus:border-yellow-600" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="button-group">
                <button type="submit" class="btn-primary">{{ __('Pieslēgties') }}</button>
                <button type="button" onclick="window.location.href='{{ route('register') }}'" class="btn-secondary">{{ __('Reģistrēties') }}</button>
                <button type="button" onclick="window.location.href='{{ route('guest') }}'" class="btn-secondary">{{ __('Ienākt kā ciemiņš') }}</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

