@extends('master.app')
@section('konten')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Tambah Form</h6>
        <form action="{{route('berita.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul berita </label>
                <input type="text" name="judul" class="form-control" @error('judul') is-invalid @enderror>
                @error('judul')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi berita </label>
                <input type="text" name="deskripsi" class="form-control" @error('deskripsi') is-invalid @enderror>
                @error('deskripsi')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id" @error('kategori_id') is-invalid @enderror>
                    <option selected hidden>Open this select menu</option>
                    @foreach ($kategori as $item)
                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection