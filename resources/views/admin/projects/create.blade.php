@extends('layouts.admin')

@section('content')

<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="title" class="form-label">titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">url</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"  value="{{old('url')}}">
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"  value="{{old('description')}}">
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">


        @foreach($technologies as $technology) 
            <input id="tech_{{$technology->id}}" type="checkbox" name="technology[]" value="{{$technology->id}}">
            <label for="tech_{{$technology->id}}" class="form-label">{{$technology->name}}</label>
            <br/>
        @endforeach
    </div>
    
    <button type="submit" class="btn btn-secondary">Salva</button>



</form>

@endsection