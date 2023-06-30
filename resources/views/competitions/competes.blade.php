<style>
    body {
        background-color: yellow;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #333;
        color: #fff;
    }

    .table-styled {
        border-radius: 5px;
        overflow: hidden;
    }

    .table-styled th,
    .table-styled td {
        transition: background-color 0.3s ease;
    }

    .table-styled tbody tr:hover {
        background-color: #f9f9f9;
    }

    .table-styled td {
        background-color: #fff;
    }

    .table-styled td:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .table-styled td:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .table-styled thead {
        background-color: #555;
        color: #fff;
    }
    
    /* Custom styling */
    .table-black-yellow th {
        background-color: #000;
        color: #ffd700;
    }
    
    .table-black-yellow td {
        background-color: #000;
        color: #fff;
    }
    
    .table-black-yellow tbody tr:hover {
        background-color: #222;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 bg-black p-4">
            {{ $competition->title }}
        </h2>
    </x-slot>
    <div class="container">
        <table class="table table-black-yellow">
            <thead>
                <tr>
                    <th>{{ __('Nr') }}</th>
                    <th>{{ __('messages.name') }}</th>
                    <th>{{ __('messages.surname') }}</th>
                    <th>{{ __('messages.weight') }}</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $counter }}.</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->weight }}</td>
                    </tr>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
