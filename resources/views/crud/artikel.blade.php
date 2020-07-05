@extends('layouts.master')

@section('content')

<br>

<div class="card">
    <div class="ml-3 mt-3 mr-3">
        <a href="{{ url('/artikel/create') }}">
            <button class="btn btn-primary"> Create New Articles </button>
        </a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Judul Artikel</th>
                <th style="width: 17%;">Slug</th>
                <th style="width: 17%;">Tag</th>
                <th style="width: 25%;">Aksi</th>
            </thead>
            <tbody>
            @foreach($artikels as $artikel)
                <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $artikel -> judul }}</td>
                <td>{{ $artikel -> slug }}</td>
                <td><a href="/artikel/{{$artikel->id}}" class="btn btn-sm btn-succes">{{ $artikel -> tag }}</a></td>
                <td>
                <a href="/artikel/{{$artikel->id}}" class="btn btn-sm btn-info">Show</a>
                <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" style="display: inline" action=" {{ url('/artikel/'. $artikel->id)}} ">
                        @csrf
                        {{ method_field('delete')}}
                        <button class="btn btn-danger" type="submit"> Delete </button>
                    </form>
                </td>
                </tr>
            @endforeach
                
            
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush