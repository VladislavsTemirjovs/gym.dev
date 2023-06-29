<style>
            html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: yellow;
    }
    .table {
    width: 100%;
    border-collapse: collapse;
    background-color: #000;
    color: #FFD700;
    margin-top: 50px;
}

.table th,
.table td {
    padding: 10px;
    text-align: left;
}

.table th {
    background-color: #FFD700;
    color: #000;
}

.table td .btn-piedalities {
    padding: 5px 10px;
    background-color: #00FF00;
    color: #000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.table td .btn-labot {
    padding: 5px 10px;
    background-color: #FFFF00;
    color: #000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.table td .btn-dzest {
    padding: 5px 10px;
    background-color: #FF0000;
    color: #FFF;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.table td button:hover {
    background-color: #FFD700;
    color: #000;
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-500 bg-black p-4">
            {{ __('Visas Sacensības') }}
        </h2>
    </x-slot>
    <table class="table">
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Vieta</th>
                <th>Datums</th>
                <th>Piedalīties</th>
                @if(auth()->user()->role === 'admin')
                    <th>Labot</th>
                    <th>Dzēst</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($competitions as $competition)
                <tr>
                    <td>
                        <a href="{{ route('competitions.show', ['competition' => $competition->id]) }}">
                            {{ $competition->title }}
                        </a>
                    </td>
                    <td>{{ $competition->place }}</td>
                    <td>{{ $competition->date }}</td>
                    @if(auth()->user()->role !== 'guest')
                    <td>
                                <form action="{{ route('competes.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="competition_id" value="{{ $competition->id }}">
                                    <button type="submit" class="btn-piedalities">Piedalīties</button>
                                </form>
                    </td>
                    @endif
                    @if(auth()->user()->role === 'admin')
                        <td>
                            <a href="{{ route('competitions.edit', ['id' => $competition->id]) }}" class="btn-labot">Labot</a>
                        </td>
                        <td>
                            <form action="{{ route('competitions.destroy', ['id' => $competition->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this competition?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-dzest">Dzēst</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
