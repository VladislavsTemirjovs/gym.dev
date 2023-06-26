@extends('layouts.app')

@section('title', 'Edit Competition')

@section('content')
    <form method="POST" action="{{ route('competitions.update', ['id' => $competition->id]) }}" class="form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nosaukums:</label>
            <input type="text" id="title" name="title" class="form-input" value="{{ $competition->title }}" required>
        </div>
        <div class="form-group">
            <label for="place">Vieta:</label>
            <input type="text" id="place" name="place" class="form-input" value="{{ $competition->place }}" required>
        </div>
        <div class="form-group">
            <label for="date">Datums:</label>
            <input type="date" id="date" name="date" class="form-input" value="{{ $competition->date }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="form-submit">Atjaunot informāciju</button>
        </div>
    </form>
@endsection