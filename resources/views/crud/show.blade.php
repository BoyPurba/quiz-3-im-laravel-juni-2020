@extends('layouts.master')

@section('content')
    
    <div class="ml-3 mt-3">
        <a href="/artikel" class="btn btn-sm btn-primary">Back</a>
        <h3>Judul : {{ $item -> judul }}</h3>
        <p>slug : {{ $item -> slug }}</p>
        <p>{{ $item -> isi }}</p>
        <a href="#" class="btn btn-sm btn-info">Info</a>
        <a href="#" class="btn btn-sm btn-info">Artikel</a>
        <a href="#" class="btn btn-sm btn-info">Terbaru</a>


    </tbody>
        

    </div>

@endsection