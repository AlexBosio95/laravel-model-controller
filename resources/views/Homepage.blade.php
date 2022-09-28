@extends('layout.app')

@section('title', 'Homepage')

@section('contain')

    <div>
        @foreach ($Movies as $movie)
            <h1>{{$movie['title']}}</h1>
        @endforeach
    </div>
    
@endsection