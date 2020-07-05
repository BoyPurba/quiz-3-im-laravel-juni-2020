@extends('layouts.master')

@section('content')

<div class="card">

    <form action="{{ url("/artikel") }}" method="POST" class="ml-3 mr-3">
        @csrf
        <h1>Create Article</h1>
        <label for="">Judul Artikel</label>
        <input class="form-control" type="text" name="judul">
        <label for="">Isi Artikel</label>
        <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
        <label for="">Slug</label>

        <input class="form-control" type="text" name="slug">
        <label for="">Tag</label>
        <input class="form-control" type="text" name="tag">
        
        <br>
        <button class="btn btn-primary" type="submit"> Create </button>
    
    </form>
    
</div>

@endsection