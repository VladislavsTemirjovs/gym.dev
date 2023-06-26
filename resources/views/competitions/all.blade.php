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
            <td><button class="btn-labot">Labot</button></td>
            <td><button class="btn-dzest">Dzēst</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection