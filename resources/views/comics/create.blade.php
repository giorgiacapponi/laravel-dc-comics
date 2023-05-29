@extends ('layouts.app')
@section('content')
<form action="{{Route('comics.store')}}" method="Post">
    @csrf
<input class="form-control form-control-lg" type="text" placeholder="title" aria-label=".form-control-lg example" name="title">
<input class="form-control" type="text" placeholder="description" aria-label="default input example"name="description">
<input class="form-control form-control-sm" type="text" placeholder="img" aria-label=".form-control-sm example"name="thumb">
<input class="form-control form-control-lg" type="text" placeholder="price" aria-label=".form-control-lg example"name="price">
<input class="form-control" type="text" placeholder="series" aria-label="default input example"name=series>
<input class="form-control form-control-sm" type="date" placeholder=".form-control-sm" aria-label=".form-control-sm example"name="sale_date">
<input class="form-control form-control-sm" type="type" placeholder=".form-control-sm" aria-label=".form-control-sm example" name="type">
<button type="submit">invia</button>
</form>
@endsection