@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="row">
            <img src="{{ $comic->image }}" class="w-50">
        </div>
        <div class="row">
            <p>{{ $comic->description }}</p>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back</a>
    </div>
@endsection
