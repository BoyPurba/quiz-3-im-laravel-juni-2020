@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3 mr-3">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/artikel/{{$item->id}}" method="POST">
                @csrf
                {{ method_field('put')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" value="{{$item->judul}}" name="judul" 
                    placeholder="Judul">
                  </div>
                  <div class="form-group"> 
                    <label for="isi">Isi</label>
                    
                    <input type="text" class="form-control" id="isi" value="{{$item->isi}}" name="isi" 
                    placeholder="Isi">
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" value="{{$item->slug}}" name="slug" 
                    placeholder="Slug">
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="slug" value="{{$item->tag}}" name="tag" 
                    placeholder="Tag">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
    </div>
</div>
@endsection