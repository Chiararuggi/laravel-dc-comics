@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$comic->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <p class="card-text">{{$comic->description}}</p>
                            <p class="card-text">{{$comic->type}}</p>
                            <p class="card-text">{{$comic->price}}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Show details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
