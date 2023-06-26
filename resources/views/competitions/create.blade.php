@extends('layouts.app')

@section('title', 'Izveidot Sacensības')


@section('content')
<form method="post" action="{{ route('competitions.store') }}" class="form">
    @csrf
    <div class="form-group">
        <label for="title">Nosaukums:</label>
        <input type="text" id="title" name="title" class="form-input" required>
    </div>
    <div class="form-group">
        <label for="place">Vieta:</label>
        <input type="text" id="place" name="place" class="form-input" required>
    </div>
    <div class="form-group">
        <label for="date">Datums:</label>
        <input type="date" id="date" name="date" class="form-input" required>
    </div>
    <div class="form-group">
        <button type="submit" class="form-submit">Submit</button>
    </div>
</form>
@endsection