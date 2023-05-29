@extends ('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col"> title </th>
        <th scope="col">series</th>
        <th scope="col">price</th>
        <th scope="col">type</th>
        <th scope="col"> <a href="{{Route('comics.create')}}">+</a></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row"><a href="{{Route('comics.show',$comic->id)}}"> {{$comic->title}}</a></th>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
          </tr> 
        @endforeach
      
    </tbody>
  </table>
@endsection