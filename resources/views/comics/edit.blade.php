@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Edit Comic</h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') ?? $comic->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('description') ?? $comic->description }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') ?? $comic->type }}">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $comic->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') ?? $comic->image }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back</a>
            </form>
        </div>
    </div>
@endsection
