@extends ('layouts.app')
@section('content')
{{-- <form action="{{Route('comics.store')}}" method="Post">
    @csrf
<input class="form-control form-control-lg" type="text" placeholder="title" aria-label=".form-control-lg example" name="title">
<input class="form-control" type="text" placeholder="description" aria-label="default input example"name="description">
<input class="form-control form-control-sm" type="text" placeholder="img" aria-label=".form-control-sm example"name="thumb">
<input class="form-control form-control-lg" type="text" placeholder="price" aria-label=".form-control-lg example"name="price">
<input class="form-control" type="text" placeholder="series" aria-label="default input example"name=series>
<input class="form-control form-control-sm" type="date" placeholder=".form-control-sm" aria-label=".form-control-sm example"name="sale_date">
<input class="form-control form-control-sm" type="type" placeholder=".form-control-sm" aria-label=".form-control-sm example" name="type">
<button type="submit">invia</button>
</form> --}}
<form action="{{route('comics.store')}}" method="POST">

    @csrf
    <div class="mb-3 mt-3 w-25">
        <strong><label for="title" class="form-label">title</label></strong>
        <input type="text" class="form-control" id="title" value="" name="title">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="img" class="form-label">img</label></strong>
        <input type="text" class="form-control" id="img" value="" name="thumb">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="price" class="form-label">price</label></strong>
        <input type="text" class="form-control" id="price" value="" name="price">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="series" class="form-label">series</label></strong>
        <input type="text" class="form-control" id="series" value="" name="series">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="type" class="form-label">type</label></strong>
        <input type="text" class="form-control" id="type" value="" name="type">
      </div>
      <div class="mb-3 mt-3 w-25">
        <strong><label for="sale_date" class="form-label">date</label></strong>
        <input type="date" class="form-control" id="sale_date" value="" name="sale_date">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
       <button class="btn btn-primary">confirm</button>
    </form>

@endsection