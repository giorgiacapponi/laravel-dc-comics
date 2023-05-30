@extends ('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col"> title </th>
        <th scope="col">series</th>
        <th scope="col">price</th>
        <th scope="col">type</th>
        <th scope="col" colspan="2"> <a href="{{Route('comics.create')}}"><i class="fa-solid fa-plus">new</i></a></th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row"><a href="{{Route('comics.show',$comic->id)}}"> {{$comic->title}}</a></th>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->type}}</td>
            <td > <a href="{{Route('comics.show',$comic->id)}}"><i class="fa-solid fa-circle-info"></i></a></td>
            {{-- <td><form action="{{Route('comics.destroy',$comic->id)}}" method="POST">
            @method('DELETE')
            @csrf
              <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
             --}}
           
             
             <td> 
            <form action="{{Route('comics.destroy',$comic->id)}}" method="POST">
              @method('DELETE')
              @csrf
             <div id="liveAlertPlaceholder"></div>
            </form>
            <button type="button" class="btn btn-danger" ><i class="fa-solid fa-trash"></i></button>
          </td>

          </tr> 
        @endforeach
      
    </tbody>
  </table>
@endsection