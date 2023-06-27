
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-yellow-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-yellow-500" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-yellow-500" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class="text-yellow-500" />

                <x-input id="email" class="block mt-1 w-full bg-black text-yellow-500" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="text-yellow-500" />

                <x-input id="password" class="block mt-1 w-full bg-black text-yellow-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center text-yellow-500">
                    <input id="remember_me" type="checkbox" class="rounded border-yellow-500 text-yellow-500 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-yellow-600 hover:text-yellow-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <a class="underline text-sm text-yellow-600 hover:text-yellow-900" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>

                    <x-button class="ml-3 bg-yellow-500 text-black">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>