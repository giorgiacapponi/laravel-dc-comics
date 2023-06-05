@extends('layouts.app')
@section('content')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3 mt-3 w-25">
            <strong><label for="title" class="form-label">title</label></strong>
            <input type="text" class="form-control" id="title" value="{{ $comic->title }}" name="title">
            @error('title')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-3 w-25">
            <strong><label for="img" class="form-label">img</label></strong>
            <input type="text" class="form-control" id="img" value="{{ old('thumb'), $comic->thumb }}"
                name="thumb">
            @error('thumb')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-3 w-25">
            <strong><label for="price" class="form-label">price</label></strong>
            <input type="text" class="form-control" id="price" value="{{ old('price'), $comic->price }}"
                name="price">
            @error('price')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-3 w-25">
            <strong><label for="series" class="form-label">series</label></strong>
            <input type="text" class="form-control" id="series" value="{{ old('series'), $comic->series }}"
                name="series">
            @error('series')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-3 w-25">
            <strong><label for="type" class="form-label">type</label></strong>
            <input type="text" class="form-control" id="type" value="{{ old('type'), $comic->type }}" name="type">
            @error('type')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 mt-3 w-25">
            <strong><label for="sale_date" class="form-label">date</label></strong>
            <input type="date" class="form-control" id="sale_date" value="{{ old('sale_date'), $comic->sale_date }}"
                name="sale_date">
            @error('sale_date')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3">{{ old('description'), $comic->description }}</textarea>
            @error('description')
                <div class="bg-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-warning">confirm edit</button>
    </form>
@endsection
