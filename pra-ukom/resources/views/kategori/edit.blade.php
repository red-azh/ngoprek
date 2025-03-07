@extends('master.app')
@section('konten')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Form</h6>
        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" value="{{$kategori->nama_kategori}}" name="nama_kategori" class="form-control"
                    @error('nama_kategori') is-invalid @enderror>
                @error('nama_kategori')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection
