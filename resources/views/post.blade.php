<style>
    /* styles.css */

.header {
  font-weight: bold;
  font-size: 1.5rem;
  color: yellow;
  background-color: black;
  padding: 1rem;
}

.form-container {
  padding: 1rem;
  background-color: black;
}

.label {
  font-size: 0.875rem;
  color: yellow;
}

.input {
  padding: 0.5rem;
  border-radius: 0.25rem;
  border: 1px solid yellow;
  background-color: yellow;
  color: black;
  width: 100%;
  margin-top: 0.25rem;
}

.button {
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  border-radius: 0.25rem;
  border: none;
  background-color: yellow;
  color: black;
  cursor: pointer;
  margin-top: 1rem;
}

.button:hover {
  background-color: #ffd700;
}

.button:focus {
  outline: none;
  box-shadow: 0 0 0 2px black, 0 0 0 4px yellow;
}

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="header">
        {{ __('messages.postnew') }}
        </h2>
    </x-slot>

    <div class="form-container">
        <form action="{{ route('posts.post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="content" class="label">{{ __('messages.text') }}:</label>
                <textarea id="content" name="content" rows="4" class="input" required></textarea>
            </div>

            <div>
                <label for="image" class="label">{{ __('messages.image') }}:</label>
                <input type="file" id="image" name="image" accept="image/*" class="input">
            </div>

            <div class="mt-4">
                <button type="submit" class="button">
                {{ __('messages.create') }}
                </button>
                <button type="button" onclick="window.location.href='{{ route('posts.all') }}'" class="button">
                {{ __('messages.return') }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>