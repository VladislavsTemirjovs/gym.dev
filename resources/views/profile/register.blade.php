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

        <!-- Rest of the form fields -->

        <div class="form-group">
            <button type="submit">Register</button>
            <button type="button" class="return-button" onclick="window.location.href='{{ route('profile.login') }}'">Return</button>
        </div>
    </form>
</div>

