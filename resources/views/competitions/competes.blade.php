<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 bg-black p-4">
            {{$competition->title }}
        </h2>
    </x-slot>
    <h2>Competing User:</h2>
    <ul>
        @if ($competition->competes && $competition->competes->user)
            <li>Name: {{ $competition->competes->user->name }}</li>
            <li>Surname: {{ $competition->competes->user->surname }}</li>
            <li>Weight: {{ $competition->competes->user->weight }}</li>
        @else
            <li>No competing user found</li>
        @endif
    </ul>
</x-app-layout>