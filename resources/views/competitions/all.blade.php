@extends('layouts.app')

@section('title', 'Kalendārs')


@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Nosaukums</th>
            <th>Vieta</th>
            <th>Datums</th>
            <th>Piedalīties</th>
            <th>Labot</th>
            <th>Dzēst</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($competitions as $competition)
        <tr>
            <td>{{ $competition->title }}</td>
            <td>{{ $competition->place }}</td>
            <td>{{ $competition->date }}</td>
            <td><button class="btn-piedalities">Piedalīties</button></td>
            <td>
                <a href = "{{route('competitions.edit', ['id' => $competition->id])}}" class="btn-labot">Labot</a>     
            </td>
            <td>
            <form action="{{ route('competitions.destroy', ['id' => $competition->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this competition?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-dzest">Dzēst</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection