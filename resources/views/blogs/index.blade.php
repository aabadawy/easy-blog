@extends('layout')
@section('content')
    <div class="col-md-12">
        <form action="{{route('blogs.index')}}" method="GET">
            <label for="title">Title</label>
            <input type="text" name="filter[title]">
            <label for="title">Body</label>
            <input type="text" name="filter[body]">
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>

    @foreach($blogs as $blog)
        <div class="card m-1 p-1" style="width: 18rem;">
            <h3>{{$blog->title}}</h3>
{{--            {{ dd($blog->getMedia()) }}--}}
{{--            <img class="card-img-top" src="{{$blog->getFirstMediaUrl('images')}}" alt="Card image cap">--}}
            <img class="card-img-top" src={{$blog->getFirstMediaUrl('images')}} alt="Card">
            <div class="card-body">
                <p class="card-text">{!! $blog->body !!}</p>
            </div>
        </div>
    @endforeach
@endsection
