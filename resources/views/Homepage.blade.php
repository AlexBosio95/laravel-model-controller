@extends('layout.app')

@section('title', 'Homepage')

@section('contain')

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($Movies as $movie)
            <div class="card m-2" style="width: 18rem;">
                <img src="https://s.studiobinder.com/wp-content/uploads/2019/09/Movie-Genres-Types-of-Movies-List-of-Genres-and-Categories-Header-StudioBinder.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$movie['title']}}</h5>
                <p class="card-text">{{$movie['original_title']}}</p>
                <p class="card-text">{{$movie['nationality']}}</p>
                <p class="card-text">{{$movie['date']}}</p>
                <span>{{$movie['vote']}}</span>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection