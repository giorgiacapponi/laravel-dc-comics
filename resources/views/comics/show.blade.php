@extends ('layouts.app')
@section('content')

    

    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->description}}</p>
@endsection