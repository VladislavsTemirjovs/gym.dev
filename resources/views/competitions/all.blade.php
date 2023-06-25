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
        <tr>
            <td>Viens</td>
            <td>Divi</td>
            <td>Trīs</td>
            <td><button class="btn-piedalities">Piedalīties</button></td>
            <td><button class="btn-labot">Labot</button></td>
            <td><button class="btn-dzest">Dzēst</button></td>
        </tr>
    </tbody>
</table>
@endsection