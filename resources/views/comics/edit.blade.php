@extends('layouts.app')
@section('content')
<form action="{{route('comics.update',$comic->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3 w-25">
        <strong><label for="title" class="form-label">title</label></strong>
        <input type="text" class="form-control" id="title" value="{{$comic->title}}" name="title">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="img" class="form-label">img</label></strong>
        <input type="text" class="form-control" id="img" value="{{$comic->thumb}}" name="thumb">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="price" class="form-label">price</label></strong>
        <input type="text" class="form-control" id="price" value="{{$comic->price}}" name="price">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="series" class="form-label">series</label></strong>
        <input type="text" class="form-control" id="series" value="{{$comic->series}}" name="series">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="type" class="form-label">type</label></strong>
        <input type="text" class="form-control" id="type" value="{{$comic->type}}" name="type">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="sale_date" class="form-label">date</label></strong>
        <input type="date" class="form-control" id="sale_date" value="{{$comic->sale_date}}" name="sale_date">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" rows="3">{{$comic->description}}</textarea>
      </div>
       <button class="btn btn-warning">confirm edit</button>
    </form>

@endsection