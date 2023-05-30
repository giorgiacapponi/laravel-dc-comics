@extends ('layouts.app')
@section('content')

    

    <h2>{{$comic->title}}</h2>
    <img class="w-25" src="{{$comic->thumb}}" alt="">
    <span ><a href="{{Route('comics.edit',$comic->id)}}"><i class="fa-solid fa-pen-to-square "></i> edit</a></span>
    <p>{{$comic->description}}</p>
@endsection